<?php

class item
{
    private $item_id;
    private $category_id;
    private $item_name;
    private $item_cost;
    private $item_amount;

    public function __construct($item_id, $category_id, $item_name, $item_cost, $item_amount)
    {
        $this ->item_id = $item_id;
        $this->category_id = $category_id;
        $this->item_name = $item_name;
        $this->item_cost = $item_cost;
        $this->item_amount = $item_amount;
    }

    public function item_id() {
        return $this->item_id;
    }

    public function category_id() {
        return $this->category_id;
    }

    public function item_name() {
        return $this->item_name;
    }

    public function item_cost() {
        return $this->item_cost;
    }

    public function item_amount() {
        return $this->item_amount;
    }

}