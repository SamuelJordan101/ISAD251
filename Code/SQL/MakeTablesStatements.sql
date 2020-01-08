#Creating Tables

CREATE TABLE Users (
user_id INT(8) NOT NULL AUTO_INCREMENT,
user_name VARCHAR(100) NOT NULL,
user_phone VARCHAR(12),
admin_check BOOLEAN NOT NULL,
PRIMARY KEY (user_id));

CREATE TABLE Orders (
order_id INT(8) NOT NULL AUTO_INCREMENT,
user_id INT(8) NOT NULL,
order_date DATETIME NOT NULL,
table_number INT(3) NOT NULL,
PRIMARY KEY (order_id, user_id));

CREATE TABLE Category (
category_id INT(8) NOT NULL AUTO_INCREMENT,
category_name VARCHAR(30) NOT NULL,
PRIMARY KEY (category_id));

CREATE TABLE Item (
item_id INT(8) NOT NULL AUTO_INCREMENT,
category_id INT(8) NOT NULL,
item_name VARCHAR(30) NOT NULL,
item_cost DECIMAL(4,2) NOT NULL,
item_amount INT (5) NOT NULL,
PRIMARY KEY (item_id, category_id));

CREATE TABLE Orderitem (
order_id INT(8) NOT NULL,
item_id INT(8) NOT NULL,
item_quantity INT(3) NOT NULL,
PRIMARY KEY (order_id, item_id));

#Foreign Keys

ALTER TABLE Orders
	ADD FOREIGN KEY (user_id)
    REFERENCES Users (user_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION;
    
ALTER TABLE Item
	ADD FOREIGN KEY (category_id)
    REFERENCES Category (category_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION;    
    
ALTER TABLE Orderitem
	ADD FOREIGN KEY (order_id)
    REFERENCES Orders (order_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    ADD FOREIGN KEY (item_id)
    REFERENCES Item (item_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION;