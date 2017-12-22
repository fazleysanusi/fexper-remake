import sys
import psycopg2

connection = psycopg2.connect(
    database="postgres", user="postgres", password="fexper", host="127.0.0.1", port="5432")
cursor = connection.cursor()


def sentInput():
    cursor.execute(
        "select analysis from sentiment order by analysis_id desc limit 1")
    text_news = cursor.fetchall()
    connection.commit()
    return text_news


def techInput():
    cursor.execute(
        "select output from technical order by output_id desc limit 1")
    output = cursor.fetchall()
    connection.commit()
    return output


def decisiontree(sent, tech):
    if sent == [('buy',)] and tech == [('Uptrend',)]:
        decision = ' Buy now! '
    if sent == [('buy',)] and tech == [('volatile',)]:
        decision = 'Buy now!'
    if sent == [('sell',)] and tech == [('Downtrend',)]:
        decision = 'Sell now!'
    if sent == [('sell',)] and tech == [('volatile',)]:
        decision = 'Sell now!'
    # else:
    #     decision = 'Please hold, market is under volatility condition'
    return decision


def saverecomend(decision):
    recomend_id = None
    cursor.execute(
        "insert into decision values (%s) returning recomend_id", (decision,))
    recomend_id = cursor.fetchone()[0]
    connection.commit()
    return recomend_id


sa = sentInput()
ta = techInput()


print('Sentiment : ', str(sa))
print('\nTechnical : ', str(ta))
decision = decisiontree(sa, ta)
print('\nFinal Decision: \n', decision)
saverecomend(decision)
connection.close()
cursor.close()
