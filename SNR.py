# this the script to run support & resistance algorithm
import sys
import psycopg2


connection = psycopg2.connect(
    database="postgres", user="postgres", password="fexper", host="127.0.0.1", port="5432")
cursor = connection.cursor()

# select the latest 30 days prices from finance table


def select30():
    prices = 0
    cursor.execute(
        "select price from finance order by date desc limit 30")
    prices = cursor.fetchall()
    return prices

# select the highest price among 30 prices


def top():
    prices = 0
    cursor.execute(
        "select max(price) from (select price from finance order by date desc limit 30) AS maxprice")
    prices = cursor.fetchone()[0]
    return prices


# select the highest price among 30 prices
def top1():
    prices = 0
    cursor.execute(
        "select price from (select price from finance order by date desc limit 30) AS maxprice ORDER BY price desc limit 2")
    prices = cursor.fetchone()[0]

    return prices

# select the 2nd highest price among 30 prices


def top2():
    prices = 0
    cursor.execute(
        "select MIN(price) from (select price from (select price from finance order by date desc limit 30) AS maxprice ORDER BY price desc limit 2) AS smallprice")
    prices = cursor.fetchone()[0]
    return prices


def averageResistance(price, price2):
    average = (price + price2) / 2
    return average


def low1():
    prices = 0
    cursor.execute(
        "select min(price) from (select price from finance order by date desc limit 30) AS minprice")
    prices = cursor.fetchone()[0]

    return prices

# select the 2nd highest price among 30 prices


def low2():
    prices = 0
    cursor.execute(
        "select MAX(price) from (select price from (select price from finance order by date asc limit 30) AS maxprice ORDER BY price asc limit 2) AS smallprice")
    prices = cursor.fetchone()[0]
    return prices


def averageSupport(price, price2):
    average = (price + price2) / 2
    return average


def savesnr(high, lowhigh, resistance, low, lowlow, support, analysis):
    snr_id = None
    cursor.execute("insert into snr values (%s, %s, %s, %s, %s, %s, %s) returning snr_id",
                   (high, lowhigh, resistance, low, lowlow, support, analysis))
    snr_id = cursor.fetchone()[0]
    connection.commit()
    return snr_id


def snranalysis(h, lh, l, hl, trend, prices):
    high = h
    lowerhigh = lh
    low = l
    higherlow = hl
    if prices >= low and prices <= high:
        if prices <= high and prices >= lowerhigh:
            if trend == 'Downtrend':
                return 'Downtrend'
        if prices <= higherlow and prices >= low:
            if trend == 'Uptrend':
                return 'Uptrend'
        else:
            return 'volatile'


def currentprice():
    cursor.execute(
        "select * from finance where price_id=(select MAX(price_id) from finance);")
    price = cursor.fetchone()[0]
    connection.commit()
    return price


def trend():
    cursor.execute(
        "select * from technical order by output_id desc limit 1")
    trend = cursor.fetchone()[0]
    connection.commit()
    return trend



# print the resistance zone
price = top1()
price2 = top2()
average = round(averageResistance(price, price2), 4)
print("Top Price: ", price)
print("2nd Price: ", price2)
print("Best Resistance Line: ", average)

print("\n==============\n")

# print the support zone
price3 = low1()
price4 = low2()
average2 = round(averageSupport(price3, price4), 4)
trend = trend()
currentprice = currentprice()
final_decision = snranalysis(
    price, price2, price3, price4, trend, currentprice)

print("Low Price: ", price3)
print("2nd low Price: ", price4)
print("Best Support Line: ", average2)
snr_id = savesnr(price, price2, average, price3,
                 price4, average2, final_decision)
print("Support & Resistance ID: ", snr_id)
print("Support & Resistance: ", final_decision)
print("trend: ", trend, type(trend))
print("currentprice: ", currentprice)
