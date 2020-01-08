CREATE PROCEDURE `SelectOrders`(IN `UserID` INT(8)) NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER 
SELECT orders.* FROM orders, users WHERE users.user_id = UserID AND users.user_id = orders.user_id;

