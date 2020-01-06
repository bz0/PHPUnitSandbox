<?php
use PHPUnit\Framework\TestCase;

require_once(__DIR__ . "/../stub/SomeClass.php");

class StubTest extends TestCase
{
    public function testStub()
    {
        // SomeClass クラスのスタブを作成します
        $stub = $this->getMockBuilder(SomeClass::class)
                     ->disableOriginalConstructor()
                     ->disableOriginalClone()
                     ->disableArgumentCloning()
                     ->disallowMockingUnknownTypes()
                     ->getMock();

        // スタブの設定を行います
        $stub->method('doSomething')
             ->willReturn('foo');

        // $stub->doSomething() をコールすると
        // 'foo' を返すようになります
        $this->assertSame('foo', $stub->doSomething());
    }
}