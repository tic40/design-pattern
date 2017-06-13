<?php

class ConcreteColleagueTypeB extends Colleague
{
    public function run()
    {
        $this->getMediator()->consultation($this);
    }

    public function advice(string $msg)
    {
        echo get_class($this) . ": " . $msg . PHP_EOL;
    }
}
