#! /bin/bash

service mysql start
mysql -u root --skip-password -e "CREATE DATABASE IF NOT EXISTS ${DB_DATABASE};"
mysql -u root --skip-password -e "CREATE USER IF NOT EXISTS '${DB_USER}'@'%' IDENTIFIED BY '${DB_PASSWORD}';"
mysql -u root --skip-password -e "GRANT ALL PRIVILEGES ON *.* TO '${DB_USER}'@'%';"
mysql -u root --skip-password -e "UPDATE mysql.user set plugin='mysql_native_password' WHERE user = 'root' ;"
mysql -u root --skip-password -e "FLUSH PRIVILEGES;"

#add password to root user:

# mysqladmin -u root password ${DB_ROOT_PASSWORD}
# mysql -e "FLUSH PRIVILEGES"
service mysql stop
mysqld