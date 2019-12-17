<?php

use PHPUnit\Framework\TestCase;

require 'CsvFileIterator.php';

class DataTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $this->assertSame((int)$expected, $a + $b);
    }

    public function additionProvider()
    {
        return new CsvFileIterator('data.csv');
    }

    public function additionProvider2()
    {
        return [
            [1, 2, 3, 6],
            [100, 200, 300, 600],
        ];
    }

    /**
     * @dataProvider additionProvider2
     */
    public function testAdd2($a, $b, $c, $expected)
    {
        $this->assertSame($expected, $a + $b + $c);
    }
}
