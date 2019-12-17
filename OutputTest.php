<?php

use PHPUnit\Framework\TestCase;

class OutputTest extends TestCase
{
    public function testExceptFooActualFoo()
    {
        $this->expectOutputString('foo');
        print 'foo';
    }

    public function testExpectBarActualBaz()
    {
        $this->expectOutputString('bar');
        echo 'baz';
    }
}
