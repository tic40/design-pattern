<?php

class RandomNumberGenerator extends NumberGenerator
{
    private $number;

    public function getNumber(): int
    {
        return $this->number;
    }

    public function execute()
    {
        $this->displayObservers();
        for ($i = 0; $i < 10; $i++) {
            $this->number = rand(0, 30);
            $this->notifyObservers();
        }
    }
}
