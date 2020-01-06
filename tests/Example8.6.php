<?php
use PHPUnit\Framework\TestCase;

require_once(__DIR__ . "/../stub/SomeClass.php");

class StubTest extends TestCase
{
    public function testReturnValueMapStub()
    {
        // SomeClass クラスのスタブを作成します
        $stub = $this->createMock(SomeClass::class);

        // 値を返すための、引数のマップを作製します
        $map = [
            ['a', 'b', 'd'],
            ['e', 'f', 'h']
        ];

        // スタブの設定を行います
        $stub->method('doSomething')
             ->will($this->returnValueMap($map));

        // $stub->doSomething() は、渡した引数に応じて異なる値を返します
        $this->assertSame('d', $stub->doSomething('a', 'b'));
        $this->assertSame('h', $stub->doSomething('e', 'f'));
    }
}