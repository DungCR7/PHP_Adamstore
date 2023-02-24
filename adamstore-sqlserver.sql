CREATE DATABASE adamstore
USE adamstore

CREATE TABLE category(
	cat_id INT NOT NULL PRIMARY KEY IDENTITY,
	cat_name VARCHAR(255) NOT NULL,
	parent_id TINYINT NOT NULL,
	url VARCHAR(255) NOT NULL,
);

CREATE TABLE producttype(
	prdType_id INT NOT NULL PRIMARY KEY IDENTITY,
	prdType_name VARCHAR(255) NOT NULL,
);

CREATE TABLE product(
	cat_id INT FOREIGN KEY REFERENCES category(cat_id),
	prdType_id INT FOREIGN KEY REFERENCES producttype(prdType_id),
	prd_id INT NOT NULL PRIMARY KEY IDENTITY,
	prd_nameId VARCHAR(255) NOT NULL,
	prd_name VARCHAR(255) NOT NULL,
	prd_image VARCHAR(255) NOT NULL,
	prd_hover VARCHAR(255) NOT NULL,
	prd_price INT NOT NULL,
	prd_status INT NOT NULL,
	prd_details TEXT NOT NULL,
);

CREATE TABLE customer(
	customer_id INT NOT NULL PRIMARY KEY IDENTITY,
	customer_name VARCHAR(255) NOT NULL,
	customer_mail VARCHAR(255) NOT NULL,
	customer_pass VARCHAR(255) NOT NULL,
	customer_address VARCHAR(255) NOT NULL,
	customer_phone VARCHAR(11) NOT NULL,
);

CREATE TABLE comment(
	comm_id INT NOT NULL PRIMARY KEY IDENTITY,
	prd_id INT FOREIGN KEY REFERENCES product(prd_id),
	customer_id INT FOREIGN KEY REFERENCES customer(customer_id),
	comm_name VARCHAR(255) NOT NULL,
	comm_mail VARCHAR(255) NOT NULL,
	comm_date DATETIME NOT NULL,
	comm_details TEXT,
);

CREATE TABLE order(
	order_id INT NOT NULL PRIMARY KEY IDENTITY,
	user_name VARCHAR(255) NOT NULL,
	user_mail VARCHAR(255) NOT NULL,
	user_phone VARCHAR(255) NOT NULL,
	address VARCHAR(255) NOT NULL,
	status TINYINT NOT NULL,
	amount DECIMAL(30,4) NOT NULL,
	created DATETIME NOT NULL,
);

CREATE TABLE orderdetail(
	order_id INT FOREIGN KEY REFERENCES order_(order_id),
	prd_id INT FOREIGN KEY REFERENCES product(prd_id),
	qty INT NOT NULL,
	price DECIMAL(30,4) NOT NULL,
);

CREATE TABLE user(
	user_id INT NOT NULL PRIMARY KEY IDENTITY,
	user_full VARCHAR(255) NOT NULL,
	user_mail VARCHAR(255) NOT NULL,
	user_pass VARCHAR(255) NOT NULL,
	user_level INT NOT NULL,
);
