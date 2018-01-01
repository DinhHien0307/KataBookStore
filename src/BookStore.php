<?php

class BookStore
{
    private $set_of_book;
    const PRICE_BOOK = 8;
    public function caculate($books)
    {
        $price = 0;
        $this->set_of_book = array_count_values($books);
        $price=$this->defaulPrice();
        return (double)$price;
    }

    private function defaulPrice()
    {
        $price = 0;
        for ($i=1;$i<=count($this->set_of_book);$i++) {
            $price += $this->set_of_book[$i]*self::PRICE_BOOK;
        }
        return $price;
    }
}
