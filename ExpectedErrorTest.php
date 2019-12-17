<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Error\Error;

class ExpectedErrorTest extends TestCase
{

    public function testFailingInclude()
    {
        $this->expectException(Error::class);
        include 'not_existing_file.php';
    }
}
