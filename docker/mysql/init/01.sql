CREATE DATABASE IF NOT EXISTS `teste_perfect_pay_db`;

CREATE USER 'perfectpay'@'%' IDENTIFIED BY 'perfectpay';
GRANT ALL PRIVILEGES ON *.* TO 'perfectpay'@'%';
