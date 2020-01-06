<?php
use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack); //$stackが空であることをチェックする

        return $stack;
    }

    /**
     * @depends testEmpty
     */
    public function testPush(array $stack) //testEmptyメソッドの返り値を取得する
    {
        array_push($stack, 'foo');
        $this->assertSame('foo', $stack[count($stack)-1]);
        $this->assertNotEmpty($stack); //$stackが空でないことをチェックする

        return $stack;
    }

    /**
     * @depends testPush
     */
    public function testPop(array $stack) //testPushメソッドの返り値を取得する
    {
        $this->assertSame('foo', array_pop($stack));
        $this->assertEmpty($stack); //$stackが空であることをチェックする
    }
}
