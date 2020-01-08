CREATE VIEW AvailableItems  AS
SELECT item.* FROM item WHERE item.item_amount > 0;

CREATE VIEW AllOrders AS
SELECT orders.* FROM orders;

CREATE VIEW AllItems AS
SELECT * FROM item;