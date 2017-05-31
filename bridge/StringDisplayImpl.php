<?php

class StringDisplayImpl extends DisplayImpl
{
    private $string;
    private $width;

    public function stringDisplayImpl(string $string)
    {
        $this->string = $string;
        $this->width = strlen($string);
    }

    public function rawOpen()
    {
        $this->printLine();
    }

    public function rawPrint()
    {
        echo "|" . $this->string . "|" . PHP_EOL;
    }

    public function rawClose()
    {
        $this->printLine();
    }

    private function printLine()
    {
        echo "+";
        for ($i = 0; $i < $this->width; $i++) {
            echo "-";
        }
        echo "+" . PHP_EOL;
    }
}
