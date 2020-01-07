<?php
use PHPUnit\Framework\TestCase;

require_once(__DIR__ . "/../stub/Subject.php");

class SubjectTest extends TestCase
{
    public function testObserversAreUpdated()
    {
        $subject = new Subject('My subject');

        // Observer クラスの prophecy を作成します。
        $observer = $this->prophesize(Observer::class);

        // update() メソッドが一度だけコールされ、その際の
        // パラメータは文字列 'something' となる、
        // ということを期待しています。
        $observer->update('something')->shouldBeCalled();

        // prophecy を公開し、モックオブジェクトを
        // Subject にアタッチします。
        $subject->attach($observer->reveal());

        // $subject オブジェクトの doSomething() メソッドをコールします。
        // これは、Observer オブジェクトのモックの update() メソッドを、
        // 文字列 'something' を引数としてコールすることを期待されています。
        $subject->doSomething();
    }
}