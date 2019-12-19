INSERT INTO `category` (`category_id`, `category_name`) VALUES ('1', 'Food');
INSERT INTO `category` (`category_id`, `category_name`) VALUES ('2', 'Dessert');
INSERT INTO `category` (`category_id`, `category_name`) VALUES ('3', 'Drinks');

INSERT INTO `item` (`item_id`,`category_id`,`item_name`,`item_cost`,`item_amount`,`item_available`) VALUES ('1','1','Burger','5.00','50','1');
INSERT INTO `item` (`item_id`,`category_id`,`item_name`,`item_cost`,`item_amount`,`item_available`) VALUES ('2','2','Ice-Cream','3.00','50','1');
INSERT INTO `item` (`item_id`,`category_id`,`item_name`,`item_cost`,`item_amount`,`item_available`) VALUES ('3','3','Coke','2.00','50','1');

INSERT INTO `users` (`user_id`,`user_name`,`user_phone`,`admin_check`) VALUES ('1','Sam','01823432123','0');
INSERT INTO `users` (`user_id`,`user_name`,`user_phone`,`admin_check`) VALUES ('2','Jeff','01823375123','0');
INSERT INTO `users` (`user_id`,`user_name`,`user_phone`,`admin_check`) VALUES ('3','Admin','01823849465','1');
