<?php

class orders
{
    private $order_id;
    private $user_id;
    private $order_date;
    private $table_number;

    public function __construct($order_id, $user_id, $order_date, $table_number)
    {
        $this ->order_id = $order_id;
        $this->user_id = $user_id;
        $this->order_date = $order_date;
        $this->table_number = $table_number;
    }


    public function order_id()
    {
        return $this->order_id;
    }

    public function user_id()
    {
        return $this->user_id;
    }

    public function order_date()
    {
        return $this->order_date;
    }

    public function table_number()
    {
        return $this->table_number;
    }

}