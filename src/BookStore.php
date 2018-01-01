<?php

class BookStore
{
    private $set_of_book;
    const PRICE_BOOK = 8;
    const DISCOUNT = [
        1 => 0,
        2 => 0.05,
        3 => 0.1,
        4 => 0.2,
        5 => 0.25
    ];
    public function caculate($books)
    {
        $totaldiscount = "";
        $discountprice = 0;
        $this->set_of_book = array_count_values($books);
        $price=$this->defaulPrice();
        $counttypes = $this->countType();

        for (; $counttypes> 1; $counttypes = $this->countType()) {
            $totaldiscount .= (string)$counttypes;
            $discountprice += $counttypes * self::PRICE_BOOK * self::DISCOUNT[$counttypes];
            $this->updateValueTypes($counttypes);
        }
        
        return (double)$price - $discountprice;
    }

    private function updateValueTypes($counttypes)
    {
        for ($i = 1; $i <= count($this->set_of_book);  $i++) {
            if ($this->set_of_book[$i] >= 1) {
                $this->set_of_book[$i]--;
                $counttypes--;
            }
        }
    }

    private function countType()
    {
        $counttypes = 0;
        for ($i = 1; $i <= count($this->set_of_book); $i++) {
            if ($this->set_of_book[$i] > 0) {
                $counttypes++;
            }
        }
        return $counttypes;
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
