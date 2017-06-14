<?php

class GraphObserver implements Observer
{
    public function update(NumberGenerator $generator)
    {
        echo "GraphObserver:";
        for ($i = 0; $i < $generator->getNumber(); $i++) {
            echo "*";
        }
        echo PHP_EOL;
        sleep(1);
    }
}
