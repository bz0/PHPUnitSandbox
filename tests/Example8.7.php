<?php
use PHPUnit\Framework\TestCase;

require_once(__DIR__ . "/../stub/SomeClass.php");

class StubTest extends TestCase
{
    public function testReturnCallbackStub()
    {
        // SomeClass クラスのスタブを作成します
        $stub = $this->createMock(SomeClass::class);

        // スタブの設定を行います
        $stub->method('doSomething')
             ->will($this->returnCallback('str_rot13'));

        // $stub->doSomething($argument) は str_rot13($argument) を返します
        $this->assertSame('fbzrguvat', $stub->doSomething('something'));
    }
}