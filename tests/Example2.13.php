<?php
use PHPUnit\Framework\TestCase;

class ExpectedErrorTest extends TestCase
{
    public function testFailingInclude()
    {
        $this->expectException(PHPUnit\Framework\Error\Error::class);
        include 'not_existing_file.php';
    }
}