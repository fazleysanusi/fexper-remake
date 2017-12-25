# this the script that run the algorithm to perform technical analysis

import sys
import psycopg2
import datetime
import pytz
from forex_python.converter import CurrencyRates
from forex_python.converter import CurrencyCodes

connection = psycopg2.connect(
    database="postgres", user="postgres", password="fexper", host="127.0.0.1", port="5432")
cursor = connection.cursor()


def insertprice(EUR_rate):
    price_id = None
    cursor.execute(
        "insert into finance values (%s) returning price_id", (EUR_rate, ))
    price_id = cursor.fetchone()[0]
    connection.commit()
    return price_id


def oldprice():
    cursor.execute(
        "select * from finance where price_id=(select MAX(price_id) from finance)-1;")
    price = cursor.fetchone()[0]
    connection.commit()
    return price


def newprice():
    cursor.execute(
        "select * from finance where price_id=(select MAX(price_id) from finance);")
    price = cursor.fetchone()[0]
    connection.commit()
    return price


def output(new, old):
    if new > old:
        trend = 'Uptrend'
    if new < old:
        trend = 'Downtrend'
    if new == old:
        trend = 'volatile'

    output_id = None
    cursor.execute(
        "insert into technical values (%s) returning output_id", (trend, ))
    output_id = cursor.fetchone()[0]
    connection.commit()
    return output_id


c = CurrencyRates()
d = CurrencyCodes()

# price date (year, month, day, hour, minute, second, microsecond )
utc = pytz.utc
# utc_dt = datetime.datetime(2002, 10, 27, 6, 0, 0, tzinfo=utc)


date_obj = datetime.datetime(2017, 12, 22, 21, 0, 0, 0, tzinfo=utc)
# date_obj = datetime.datetime(2017, 11, 1, 21)
# USD rate
rate = c.get_rates('USD')

# get EUR price
EUR_rate = float(c.get_rate('EUR', 'USD', date_obj))

# display the rate EUR to USD
# print('EUR Rate: ', d.get_symbol('USD'), EUR_rate)

price_id = insertprice(EUR_rate)

newprice = newprice()

print('NEW EUR Rate: ', d.get_symbol('USD'), newprice)


oldprice = oldprice()

print('Previous EUR Rate: ', d.get_symbol('USD'), oldprice)

print('output id : ', output(newprice, oldprice))


connection.close()
cursor.close()
