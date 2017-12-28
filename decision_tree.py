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


def snrInput():
    cursor.execute(
        "select snr_output from snr order by date desc limit 1")
    output = cursor.fetchall()
    connection.commit()
    return output


def techresult(pt, sr):
    if pt == [('Uptrend',)] and sr == [('Uptrend',)]:
        a = 'Uptrend'
    elif pt == [('Uptrend',)] and sr == [('Downtrend',)]:
        a = 'volatile'
    elif pt == [('Uptrend',)] and sr == [('volatile',)]:
        a = 'Uptrend'
    elif pt == [('volatile',)] and sr == [('Uptrend',)]:
        a = 'Uptrend'
    elif pt == [('volatile',)] and sr == [('Downtrend',)]:
        a = 'Downtrend'
    elif pt == [('volatile',)] and sr == [('volatile',)]:
        a = 'volatile'
    elif pt == [('Downtrend',)] and sr == [('Uptrend',)]:
        a = 'volatile'
    elif pt == [('Downtrend',)] and sr == [('Downtrend',)]:
        a = 'Downtrend'
    elif pt == [('Downtrend',)] and sr == [('volatile',)]:
        a = 'Downtrend'
    else:
        a = 'unkown'
    return a


def decisiontree(sent, tech):
    if sent == [('positive',)] and tech == 'Uptrend':
        decision = 'Buy now!'
    elif sent == [('neutral',)] and tech == 'Uptrend':
        decision = 'Buy now!'
    elif sent == [('negative',)] and tech == 'Uptrend':
        decision = 'Please hold, market is under volatility condition'
    elif sent == [('positive',)] and tech == 'volatile':
        decision = 'Buy now!'
    elif sent == [('neutral',)] and tech == 'volatile':
        decision = 'Please hold, market is under volatility condition'
    elif sent == [('negative',)] and tech == 'volatile':
        decision = 'Sell now!'
    elif sent == [('positive',)] and tech == 'Downtrend':
        decision = 'Please hold, market is under volatility condition'
    elif sent == [('neutral',)] and tech == 'Downtrend':
        decision = 'Sell now!'
    elif sent == [('negative',)] and tech == 'Downtrend':
        decision = 'Sell now!'
    return decision


def savetechnical(decision):
    recomend_id = None
    cursor.execute(
        "insert into technical_analysis values (%s) returning analysis_id", (decision,))
    analysis_id = cursor.fetchone()[0]
    connection.commit()
    return analysis_id


def saverecomend(decision):
    recomend_id = None
    cursor.execute(
        "insert into decision values (%s) returning recomend_id", (decision,))
    recomend_id = cursor.fetchone()[0]
    connection.commit()
    return recomend_id


sa = sentInput()
snr = snrInput()
ta = techInput()


print('Sentiment : ', str(sa))
print('\nPrice Trend : ', str(ta))
print('\nS&R : ', str(snr))
technical_analysis = techresult(ta, snr)
print('\nFinal Technical Analysis: \n', technical_analysis)
decision = decisiontree(sa, technical_analysis)
print('\nFinal Decision: \n', decision)
saverecomend(decision)
savetechnical(technical_analysis)
connection.close()
cursor.close()
