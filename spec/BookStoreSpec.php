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

    public function it_2_book_2_type()
    {
        $this->caculate([1,2])->shouldBe(15.2);
    }

    public function it_3_book_2_type()
    {
        $this->caculate([1,1,2])->shouldBe(23.2);
    }

    public function it_5_book_2_type()
    {
        $this->caculate([1,1,1,2,2])->shouldBe(38.4);
    }
    public function it_3_book_3_type()
    {
        $this->caculate([1,2,3])->shouldBe(21.6);
    }
    public function it_5_book_5_type()
    {
        $this->caculate([1,2,3,4,5])->shouldBe(30.0);
    }
    public function it_5_book_4_type()
    {
        $this->caculate([1,2,3,4,1])->shouldBe(33.6);
    }

    public function it_8_book_12341235()
    {
        $this->caculate([1,2,3,4,1,2,3,5])->shouldBe(51.2);
    }
}
