<?php
require_once "vendor/autoload.php";
use Framework\Product;

class UnderlinePen implements Product
{
    private $ulchar;

    public function __construct(string $ulchar)
    {
        $this->ulchar = $ulchar;
    }

    public function use(string $s)
    {
        $length = strlen(mb_convert_encoding($s, 'SJIS', 'UTF-8'));
        echo "\"{$s}\"" . PHP_EOL . " ";
        for ($i = 0; $i < $length; $i++) {
            echo $this->ulchar;
        }
        echo PHP_EOL;
    }

    public function createClone(): Product
    {
        $p = null;
        try {
            $p = clone $this;
        } catch (Exception $e) {
            $e->getTrace();
        }
        return $p;
    }
}
