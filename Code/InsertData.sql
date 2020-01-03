INSERT INTO `category` (`category_id`, `category_name`) VALUES ('1', 'Food');
INSERT INTO `category` (`category_id`, `category_name`) VALUES ('2', 'Dessert');
INSERT INTO `category` (`category_id`, `category_name`) VALUES ('3', 'Drinks');

INSERT INTO `item` (`item_id`,`category_id`,`item_name`,`item_cost`,`item_amount`) VALUES ('1','1','Burger','5.00','50');
INSERT INTO `item` (`item_id`,`category_id`,`item_name`,`item_cost`,`item_amount`) VALUES ('2','1','Hot-Dog','3.00','50');
INSERT INTO `item` (`item_id`,`category_id`,`item_name`,`item_cost`,`item_amount`) VALUES ('3','2','Ice-Cream','3.00','50');
INSERT INTO `item` (`item_id`,`category_id`,`item_name`,`item_cost`,`item_amount`) VALUES ('4','2','Profiteroles','3.00','50');
INSERT INTO `item` (`item_id`,`category_id`,`item_name`,`item_cost`,`item_amount`) VALUES ('5','3','Coke','2.00','50');
INSERT INTO `item` (`item_id`,`category_id`,`item_name`,`item_cost`,`item_amount`) VALUES ('6','3','Sprite','3.00','50');

INSERT INTO `users` (`user_id`,`user_name`,`user_phone`,`admin_check`) VALUES ('1','Sam','01823432123','0');
INSERT INTO `users` (`user_id`,`user_name`,`user_phone`,`admin_check`) VALUES ('2','Jeff','01823375123','0');
INSERT INTO `users` (`user_id`,`user_name`,`user_phone`,`admin_check`) VALUES ('3','Admin','01823849465','1');

INSERT INTO `orders` (`order_id`,`user_id`,`order_date`,`table_number`) VALUES ('1','1','2019-12-19 15:20:00','55');
INSERT INTO `orders` (`order_id`,`user_id`,`order_date`,`table_number`) VALUES ('2','1','2019-12-19 15:25:00','45');
INSERT INTO `orders` (`order_id`,`user_id`,`order_date`,`table_number`) VALUES ('3','2','2019-12-19 15:30:00','35');
INSERT INTO `orders` (`order_id`,`user_id`,`order_date`,`table_number`) VALUES ('4','2','2019-12-19 15:35:00','25');

INSERT INTO `orderitem` (`order_id`,`item_id`,`item_quantity`) VALUES ('1','1','1');
INSERT INTO `orderitem` (`order_id`,`item_id`,`item_quantity`) VALUES ('1','5','1');
INSERT INTO `orderitem` (`order_id`,`item_id`,`item_quantity`) VALUES ('2','2','3');
INSERT INTO `orderitem` (`order_id`,`item_id`,`item_quantity`) VALUES ('2','6','2');
INSERT INTO `orderitem` (`order_id`,`item_id`,`item_quantity`) VALUES ('3','3','1');
INSERT INTO `orderitem` (`order_id`,`item_id`,`item_quantity`) VALUES ('3','5','1');
INSERT INTO `orderitem` (`order_id`,`item_id`,`item_quantity`) VALUES ('4','4','4');
INSERT INTO `orderitem` (`order_id`,`item_id`,`item_quantity`) VALUES ('4','6','8');
