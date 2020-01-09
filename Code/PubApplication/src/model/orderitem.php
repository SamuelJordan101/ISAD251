<?php

class orderitem
{
    private $order_id;
    private $item_id;
    private $item_quantity;

    public function __construct($order_id, $item_id, $item_quantity)
    {
        $this ->order_id = $order_id;
        $this->item_id = $item_id;
        $this->item_quantity = $item_quantity;
    }

    public function order_id() {
        return $this->order_id;
    }

    public function item_id() {
        return $this->item_id;
    }

    public function item_quantity() {
        return $this->item_quantity;
    }

}