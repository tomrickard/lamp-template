#!/bin/sh
source /vagrant/mysql_secure_installation.conf

echo "Password = $mysql_password"
echo "Change Root = $mysql_change_root"