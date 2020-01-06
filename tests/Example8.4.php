<?php
use PHPUnit\Framework\TestCase;

require_once(__DIR__ . "/../stub/SomeClass.php");

class StubTest extends TestCase
{
    public function testReturnArgumentStub()
    {
        // SomeClass クラスのスタブを作成します
        $stub = $this->createMock(SomeClass::class);

        // スタブの設定を行います
        $stub->method('doSomething')
             ->will($this->returnArgument(0));

        // $stub->doSomething('foo') は 'foo' を返します
        $this->assertSame('foo', $stub->doSomething('foo'));

        // $stub->doSomething('bar') は 'bar' を返します
        $this->assertSame('bar', $stub->doSomething('bar'));
    }
}