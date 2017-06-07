<?php

abstract class Display
{
    abstract public function getColumns(): int;
    abstract public function getRows(): int;
    abstract public function getRowText(int $row);

    public function show()
    {
        for ($i = 0; $i < $this->getRows(); $i++) {
            echo $this->getRowText($i) . PHP_EOL;
        }
    }
}
