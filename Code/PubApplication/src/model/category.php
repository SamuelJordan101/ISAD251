<?php

class category
{
    private $category_id;
    private $category_name;


    public function __construct($category_id, $category_name)
    {
        $this ->category_id = $category_id;
        $this->category_name = $category_name;
    }


    public function category_id()
    {
        return $this->category_id;
    }

    public function category_name()
    {
        return $this->category_name;
    }

}