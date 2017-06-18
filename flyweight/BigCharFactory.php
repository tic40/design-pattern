<?php

class BigCharFactory
{
    private $pool = [];
    private static $singleton;

    private function __construct()
    {
    }

    public static function getInstance(): BigCharFactory
    {
        if (self::$singleton === null) {
            self::$singleton = new self;
        }
        return self::$singleton;
    }

    public function getBigChar(string $charname): BigChar
    {
        if (isset($this->pool[$charname]) === false) {
            $this->pool[$charname] = new BigChar($charname);
        }
        return $this->pool[$charname];
    }
}
