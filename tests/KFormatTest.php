<?php

use Rakaaditya\KFormat\Format;

class RoutesTest extends \PHPUnit_Framework_TestCase  
{
    public function testThousand()
    {
        $this->assertEquals('1K', Format::convert(1000));
        $this->assertEquals('10K', Format::convert(10000));
        $this->assertEquals('1.3K', Format::convert(1250));
        $this->assertEquals('12.5K', Format::convert(12500));
    }

    public function testMillion()
    {
        $this->assertEquals('1M', Format::convert(1000000));
        $this->assertEquals('10M', Format::convert(10000000));
        $this->assertEquals('1.3M', Format::convert(1250000));
        $this->assertEquals('12.5M', Format::convert(12500000));
    }

    public function testBillion()
    {
        $this->assertEquals('1B', Format::convert(1000000000));
        $this->assertEquals('10B', Format::convert(10000000000));
        $this->assertEquals('1.3B', Format::convert(1250000000));
        $this->assertEquals('12.5B', Format::convert(12500000000));
    }
}
