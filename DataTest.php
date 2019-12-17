<?php

use PHPUnit\Framework\TestCase;

class DataTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $this->assertSame($expected, $a + $b);
    }

    public function additionProvider()
    {
        return [
            'adding zeros'  => [0, 0, 0],
            'zero plus one' => [0, 1, 1],
            'one plus zero' => [1, 0, 1],
            'one plus one'  => [1, 1, 3],
        ];
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
