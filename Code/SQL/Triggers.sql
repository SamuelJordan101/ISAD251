CREATE TRIGGER `deleteorderitems` BEFORE DELETE ON `orders` 
FOR EACH ROW 
DELETE FROM orderitem WHERE orderitem.order_id = old.order_id;