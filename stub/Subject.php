<?php
use PHPUnit\Framework\TestCase;

class Subject
{
    protected $observers = [];
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function doSomething()
    {
        // なにかをします
        // ...

        // なにかしたということをオブザーバに通知します
        $this->notify('something');
    }

    public function doSomethingBad()
    {
        foreach ($this->observers as $observer) {
            $observer->reportError(42, 'Something bad happened', $this);
        }
    }

    protected function notify($argument)
    {
        foreach ($this->observers as $observer) {
            $observer->update($argument);
        }
    }

    // その他のメソッド
}

class Observer
{
    public function update($argument)
    {
        // なにかをします
    }

    public function reportError($errorCode, $errorMessage, Subject $subject)
    {
        // なにかをします
    }

    // その他のメソッド
}
