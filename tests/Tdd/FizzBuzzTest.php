<?php

namespace Tdd\Tests;

use PHPUnit\Framework\TestCase;
use Tdd\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    private $list;

    public function setUp()
    {
        $this->list = [
            '1',
            '2',
            'Fizz',
            '4',
            'Buzz',
            'Fizz',
            '7',
            '8',
            'Fizz',
            'Buzz',
            '11',
            'Fizz',
            '13',
            '14',
            'FizzBuzz',
            '16',
            '17',
            'Fizz',
            '19',
            'Buzz'
        ];
    }

    public function test_get_list_first_number()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals($this->list[0], $fizzBuzz->list()[0]);
    }

    public function test_get_list_second_number()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals($this->list[1], $fizzBuzz->list()[1]);
    }

    public function test_get_list_third_number()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals($this->list[2], $fizzBuzz->list()[2]);
    }

    public function test_get_list_fifth_number()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals($this->list[4], $fizzBuzz->list()[4]);
    }

    public function test_get_list_sixth_number()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals($this->list[5], $fizzBuzz->list()[5]);
    }

    public function test_get_list_ten_number()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals($this->list[9], $fizzBuzz->list()[9]);
    }

    public function test_get_list_15_number()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals($this->list[14], $fizzBuzz->list()[14]);
    }

    public function test_get_list_30_number()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals("FizzBuzz", $fizzBuzz->list()[29]);
    }
}
