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
    # 1
    if pt == [('Uptrend',)] and sr == [('Uptrend',)]:
        decision = 'Uptrend'
    # 2
    elif pt == [('Uptrend',)] and sr == [('Downtrend',)]:
        decision = 'volatile'
    # 3
    elif pt == [('Uptrend',)] and sr == [('volatile',)]:
        decision = 'Uptrend'
    # 4
    elif pt == [('volatile',)] and sr == [('Uptrend',)]:
        decision = 'Uptrend'
    # 5
    elif pt == [('volatile',)] and sr == [('Downtrend',)]:
        decision = 'Downtrend'
    # 6
    elif pt == [('volatile',)] and sr == [('volatile',)]:
        decision = 'volatile'
    # 7
    elif pt == [('Downtrend',)] and sr == [('Uptrend',)]:
        decision = 'volatile'
    # 8
    elif pt == [('Downtrend',)] and sr == [('Downtrend',)]:
        decision = 'Downtrend'
    # 9
    elif pt == [('Downtrend',)] and sr == [('volatile',)]:
        decision = 'Downtrend'
    return decision


def decisiontree(sent, tech):
    if sent == [('buy',)] and tech == [('Uptrend',)]:
        decision = 'Buy now!'
    elif sent == [('buy',)] and tech == [('volatile',)]:
        decision = 'Buy now!'
    elif sent == [('sell',)] and tech == [('Downtrend',)]:
        decision = 'Sell now!'
    elif sent == [('sell',)] and tech == [('volatile',)]:
        decision = 'Sell now!'
    else:
        decision = 'Please hold, market is under volatility condition'
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
print('\nTechnical : ', str(ta))
decision = decisiontree(sa, ta)
print('\nFinal Decision: \n', decision)
saverecomend(decision)
connection.close()
cursor.close()
