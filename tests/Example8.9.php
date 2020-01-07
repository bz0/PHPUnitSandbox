<?php
use PHPUnit\Framework\TestCase;

require_once(__DIR__ . "/../stub/SomeClass.php");

class StubTest extends TestCase
{
    public function testThrowExceptionStub()
    {
        // SomeClass クラスのスタブを作成します
        $stub = $this->createMock(SomeClass::class);

        // スタブの設定を行います
        $stub->method('doSomething')
             ->will($this->throwException(new Exception));

        // $stub->doSomething() は例外をスローします
        $stub->doSomething();
    }
}