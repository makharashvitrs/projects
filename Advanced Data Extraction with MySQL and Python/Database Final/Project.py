# connect() method - to create the connection objects. This will connect to database.
# once we get the persmission, we will use the "cursor()" method to create the cursor object.
# we will use the cursor object to execute the query.
from aifc import Error
import mysql.connector

try:
    # Connect to the database
    connection = mysql.connector.connect(host='localhost',
                                         database='ap',
                                         user='root',
                                         password=#password,

                                         )
    print("Connected Successfully")
except Error as e:
    print(f"Error '{e} occured.")



# Query that will retreive all the data
mySql_select_Query = """
SELECT vendor_name, vendor_city, vendor_state, SUM(invoice_total) AS total_invoice
FROM vendors
NATURAL JOIN invoices
GROUP BY vendor_name
HAVING SUM(invoice_total) > 2000
ORDER BY SUM(invoice_total) DESC

# """

# Create cursor object with "connection" object
cursor = connection.cursor()
# Execute the query
cursor.execute(mySql_select_Query)



# Use for loop for nice looking output box
for vendor_name, vendor_city, vendor_state, total_invoice in cursor:
    print("Vendor {} from {}, {} still owes ${}".format(vendor_name, vendor_city, vendor_state, total_invoice))


# Close the connection
try:
    connection.close()
    cursor.close()
    print("MYSQL connection is closed")
except Error as e:
    print(f"Error '{e} has occured.")
