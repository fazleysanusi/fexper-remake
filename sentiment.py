import sys
import psycopg2
from newspaper import Article
import nltk.classify.util
from nltk.classify import NaiveBayesClassifier
from nltk.corpus import names

# url = 'http://fox13now.com/2013/12/30/new-year-new-laws-obamacare-pot-guns-and-drones/'
# url = 'https://www.dailyfx.com/forex/fundamental/forecast/weekly/eur/2017/10/29/After-ECB-Policy-Meeting-Euro-Adrift-Looking-for-a-Life-Boat.html'
# url = 'https://www.dailyfx.com/forex/market_alert/2017/11/23/EURUSD-Jumps-as-Euro-Zone-Economic-Activity-Booms.html'
# url = 'https://www.dailyfx.com/forex/fundamental/daily_briefing/session_briefing/euro_open/2017/11/23/Euro-May-Shrug-Off-PMI-Survey-Roundup-German-GDP-Revision.html'
url = 'https://www.fxstreet.com/currencies/eurusd/'
# '
# url = 'https://www.fxstreet.com/news/eur-usd-11900-back-on-sight-amid-fresh-usd-selling-201712270705'

article = Article(url)
article.download()
article.html
article.parse()
authors = article.authors
date = article.publish_date
text = article.text
nlp = article.nlp()
article.keywords
summary = article.summary


connection = psycopg2.connect(
    database="postgres", user="postgres", password="fexper", host="127.0.0.1", port="5432")


cursor = connection.cursor()


def savenews(date, authors, text, nlp, summary):
    news_id = None
    cursor.execute("insert into news values (%s, %s, %s, %s, %s) returning news_id",
                   (date, authors, text, nlp, summary))
    news_id = cursor.fetchone()[0]
    connection.commit()
    return news_id


def callnews(news_no):
    cursor.execute("select text from news where news_id=(%s)", (news_no, ))
    text_news = cursor.fetchall()
    connection.commit()
    return text_news


def word_feats(words):
    return dict([(word, True) for word in words])


def analyse(buy, sell):
    if buy > sell:
        result = 'positive'
    if buy < sell:
        result = 'negative'
    if buy == sell:
        result = 'neutral'
    return result


def percentage(neg, pos):
    if neg > pos:
        total = 100 - ((neg / (neg + pos)) * 100)
    if neg < pos:
        total = (pos / (neg + pos)) * 100
    if neg == pos:
        total = 50
    return total


def saveanalysis(result, percentage):
    analysis_id = None
    cursor.execute(
        "insert into sentiment values (%s, %s) returning analysis_id", (result, percentage,))
    analysis_id = cursor.fetchone()[0]
    connection.commit()
    return analysis_id


news_no = savenews(date, authors, text, nlp,  summary)
print('news_id:', news_no)
corpus = callnews(news_no)


positive_vocab = ['awesome', 'outstanding', 'fantastic', 'increase', 'hike', 'bullish', 'contraction',
                  'terrific', 'good', 'nice', 'great', ':)', 'strong']
negative_vocab = ['bad', 'terrible', 'useless',
                  'hate', ':(', 'decrease', 'bearish', 'expansion']
neutral_vocab = ['movie', 'the', 'sound', 'was',
                 'is', 'actors', 'did', 'know', 'words', 'not', 'neutral']

positive_features = [(word_feats(pos), 'pos') for pos in positive_vocab]
negative_features = [(word_feats(neg), 'neg') for neg in negative_vocab]
neutral_features = [(word_feats(neu), 'neu') for neu in neutral_vocab]

train_set = negative_features + positive_features + neutral_features

classifier = NaiveBayesClassifier.train(train_set)

# Predict
neg = 0.0
pos = 0.0
sentence = str(corpus)
sentence = sentence.lower()
words = sentence.split(' ')
for word in words:
    classResult = classifier.classify(word_feats(word))
    if classResult == 'neg':
        neg = neg + 1
    if classResult == 'pos':
        pos = pos + 1

# print('Positive: ' + str(float(pos)/len(words)))
# print('Negative: ' + str(float(neg)/len(words)))
positive = float(pos) / len(words)
negative = float(neg) / len(words)

result = analyse(positive, negative)
percent = round(percentage(negative, positive), 2)
print('positive:', positive, '\t negative:', negative)
print('percentage:', percent, '%')
print('result:', result)
print('analysis_id:', saveanalysis(result, percent))


connection.close()
cursor.close()
