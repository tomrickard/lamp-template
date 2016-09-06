source /vagrant/mysql_secure_installation.conf


# Create database
dbsetup="CREATE DATABASE test;";
mysql -u $mysql_user -p$mysql_password -e "$dbsetup";

# Create tabls test
dbtable="CREATE TABLE test.users ( id int NOT NULL AUTO_INCREMENT, first_name varchar (20), last_name varchar (20), age int(3), PRIMARY KEY (id) )";
mysql -u $mysql_user -p$mysql_password -e "$dbtable";