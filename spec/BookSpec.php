<?php

namespace spec;

use Book;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BookSpec extends ObjectBehavior
{
    protected $name;
    protected $quality;
    public function it_is_initializable()
    {
        $this->shouldHaveType(Book::class);
    }

    public function let()
    {
        $this->name = "Book_I";
        $this->quality = 1;
        $this->beConstructedWith($this->name, $this->quality);
    }
}
