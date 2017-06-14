<?php

class DigitObserver implements Observer
{
    public function update(NumberGenerator $generator)
    {
        echo "DigitObserver:" . $generator->getNumber() . PHP_EOL;
        sleep(1);
    }
}
