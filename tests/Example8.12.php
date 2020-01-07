<?php
use PHPUnit\Framework\TestCase;

require_once(__DIR__ . "/../stub/Subject.php");

class SubjectTest extends TestCase
{
    public function testErrorReported()
    {
        // Observer クラスのモックを作成します。
        // reportError() メソッドをモックします。
        $observer = $this->getMockBuilder(Observer::class)
                         ->setMethods(['reportError'])
                         ->getMock();

        $observer->expects($this->once())
                 ->method('reportError')
                 ->with(
                     $this->greaterThan(0),
                     $this->stringContains('Something'),
                     $this->anything()
                 );

        $subject = new Subject('My subject');
        $subject->attach($observer);

        // doSomethingBad() メソッドは、
        // reportError() メソッドを通じてオブザーバにエラーを報告しなければなりません。
        $subject->doSomethingBad();
    }
}
