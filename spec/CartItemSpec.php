<?php

namespace spec;

use CartItem;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CartItemSpec extends ObjectBehavior
{
    protected $book_1;
    protected $book_2;
    public function let()
    {
        $this->book_1 = new Book("Harry I", 1);
        $this->book_2 = new Book("Harry II", 2);
        $this->beConstructedWith($this->book_1, $this->book_2);
    }
}
