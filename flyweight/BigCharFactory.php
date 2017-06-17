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
        $bc = $this->pool[$charname] ?? null;
        if ($bc === null) {
            $bc = new BigChar($charname);
            $this->pool[$charname] = $bc;
        }
        return $bc;
    }
}
