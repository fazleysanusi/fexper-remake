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

# def updateResistance(price, average, price2):
#     price_id = None
#     cursor.execute(
#         "insert into finance values (%s,%s,%s,%s,%s,%s) returning price_id", (EUR_rate, ))
#     price_id = cursor.fetchone()[0]
#     connection.commit()
#     return price_id


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


def savesnr(high, lowhigh, resistance, low, lowlow, support):
    snr_id = None
    cursor.execute("insert into snr values (%s, %s, %s, %s, %s, %s) returning snr_id",
                   (high, lowhigh, resistance, low, lowlow, support))
    snr_id = cursor.fetchone()[0]
    connection.commit()
    return snr_id

# price = select30()


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
print("Low Price: ", price3)
print("2nd low Price: ", price4)
print("Best Support Line: ", average2)
snr_id = savesnr(price, price2, average, price3, price4, average2)
print(snr_id)
# cursor.execute("insert into snr values (%s,%s,%s,%s,%s,%s)",
#                (price, price2, average, price3, price4, average2))
