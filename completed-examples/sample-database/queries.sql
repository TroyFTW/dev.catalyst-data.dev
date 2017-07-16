-- Example SQL Queries for Northwinds

-- joining Orders, Employees, and Customers

SELECT o.id, o.order_date, c.first_name, c.last_name, o.ship_city,e.email_address
FROM orders o
INNER JOIN customers c
on o.customer_id = c.id
INNER JOIN employees e 
on o.customer_id = e.id
ORDER BY o.id ASC