<?php
use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function testSomething()
    {
        // オプション: お望みなら、ここで何かのテストをしてください。
        $this->assertTrue(true, 'これは動いているはずです。');

        // ここで処理を止め、テストが未完成であるという印をつけます。
        $this->markTestIncomplete(
          'このテストは、まだ実装されていません。'
        );
    }
}