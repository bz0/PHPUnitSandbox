<?php
use PHPUnit\Framework\TestCase;

require __DIR__ . '/../Iterator/CsvFileIterator.php';

class DataTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $this->assertSame((int)$expected, (int)($a + $b));
    }

    public function additionProvider()
    {
        return new CsvFileIterator(__DIR__ . '/../data/data.csv');
    }
}
