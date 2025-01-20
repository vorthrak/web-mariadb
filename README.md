# web-mariadb
## configuration in server
- ```sudo apt update -y```
- ```sudo apt install apache2 mariadb-client php php-mysql -y```
- ```sudo systemctl start apache2```
- ```sudo systemctl enable apache2```
- ```sudo systemctl start mariadb```
- ```sudo systemctl enable mariadb```
- ```mysql -h <endpoint database> -u <username> -p```
- ```cd /var/www/html/<taruh file>```
- ```sudo systemctl restart apache2```
---
## create database
```sql
CREATE DATABASE <nama database>;
USE <nama database>;
CREATE TABLE table_name (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
);
exit;
```
---
