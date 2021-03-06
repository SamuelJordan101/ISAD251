CREATE PROCEDURE `AddOrder`(IN `UserID` INT, IN `TableNumber` INT) NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER 
INSERT INTO orders(user_id,order_date,table_number) VALUES(UserID,CURRENT_TIMESTAMP,TableNumber);

CREATE PROCEDURE `OrderCancel`(IN `OrderID` INT) NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER 
DELETE FROM orders WHERE orders.order_id = OrderId;

CREATE PROCEDURE `AdminEditItem`(IN `ItemID` INT, IN `CategoryID` INT, IN `ItemName` TEXT, IN `ItemCost` INT, IN `ItemAmount` INT) NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER 
UPDATE item SET item.category_id = CategoryID, item.item_name = ItemName, item.item_cost = ItemCost, item.item_amount = ItemAmount WHERE item.item_id = ItemID;

CREATE PROCEDURE `OrderAdd`(IN `OrderID` INT, IN `ItemID` INT, IN `ItemQuantity` INT) NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER 
INSERT INTO orderitem(order_id,item_id,item_quantity) VALUES(OrderID, ItemID, ItemQuantity);

CREATE PROCEDURE `AdminNewItem`(IN `CategoryID` INT, IN `ItemName` TEXT, IN `ItemCost` INT, IN `ItemAmount` INT) NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER 
INSERT INTO item(category_id,item_name,item_cost,item_amount) VALUES(CategoryID,ItemName,ItemCost,ItemAmount);