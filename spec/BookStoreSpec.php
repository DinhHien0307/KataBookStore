<?php

namespace spec;

use BookStore;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BookStoreSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(BookStore::class);
    }

    public function it_1_book_1_type()
    {
        $this->caculate([1])->shouldBe(8.0);
    }

    public function it_2_book_1_type()
    {
        $this->caculate([1,1])->shouldBe(16.0);
    }

    public function it_3_book_1_type()
    {
        $this->caculate([1,1,1])->shouldBe(24.0);
    }
}
