<?php

class Book
{
    private $name;
    private $price;
    private $quality;

    public function __construct($name, $quality)
    {
        $this->name = $name;
        $this->price = 8;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getPrice()
    {
        return $this->price;
    }
}
