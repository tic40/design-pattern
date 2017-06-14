<?php

abstract class NumberGenerator
{
    private $observers = [];

    public function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function displayObservers()
    {
        echo "Observers:" . PHP_EOL;
        foreach ($this->observers as $k => $v) {
            echo $k+1 . ":" . get_class($v) . PHP_EOL;
        }
        echo PHP_EOL;
    }

    public function deleteObserver(Observer $observer)
    {
        foreach ($this->observers as $k => $v) {
            if ($v === $observer) {
                unset($this->observers[$k]);
                return;
            }
        }
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    abstract public function getNumber(): int;
    abstract public function execute();
}
