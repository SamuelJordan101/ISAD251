CREATE VIEW AvailableItems  AS
SELECT item.* FROM item WHERE item.item_amount > 0;