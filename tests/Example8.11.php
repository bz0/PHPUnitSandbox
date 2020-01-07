<?php
use PHPUnit\Framework\TestCase;

require_once(__DIR__ . "/../stub/Subject.php");

class SubjectTest extends TestCase
{
    public function testObserversAreUpdated()
    {
        // Observer クラスのモックを作成します。
        // update() メソッドのみのモックです。
        $observer = $this->getMockBuilder(Observer::class)
                         ->setMethods(['update'])
                         ->getMock();

        // update() メソッドが一度だけコールされ、その際の
        // パラメータは文字列 'something' となる、
        // ということを期待しています。
        $observer->expects($this->once())
                 ->method('update')
                 ->with($this->equalTo('something'));

        // Subject オブジェクトを作成し、Observer オブジェクトの
        // モックをアタッチします。
        $subject = new Subject('My subject');
        $subject->attach($observer);

        // $subject オブジェクトの doSomething() メソッドをコールします。
        // これは、Observer オブジェクトのモックの update() メソッドを、
        // 文字列 'something' を引数としてコールすることを期待されています。
        $subject->doSomething();
    }
}
