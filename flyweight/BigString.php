<?php

class BigString
{
    private $bigchars;

    public function __construct(string $string)
    {
        $this->bigchars = [];
        $factory = BigCharFactory::getInstance();
        for ($i = 0; $i < strlen($string); $i++) {
            $this->bigchars[$i] = $factory->getBigChar($string[$i]);
        }
    }

    public function print()
    {
        for ($i = 0; $i < count($this->bigchars); $i++) {
            $this->bigchars[$i]->print();
        }
    }
}
