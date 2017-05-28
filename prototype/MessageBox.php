<?php
use Framework\Product;

class MessageBox implements Product
{
    private $decochar;

    public function __construct(string $decochar)
    {
        $this->decochar = $decochar;
    }

    public function use(string $s)
    {
        $length = strlen(mb_convert_encoding($s, 'SJIS', 'UTF-8'));

        for ($i = 0; $i < $length + 4; $i++) {
            echo($this->decochar);
        }
        echo PHP_EOL . "{$this->decochar} {$s} {$this->decochar}" . PHP_EOL;
        for ($i = 0; $i < $length + 4; $i++) {
            echo $this->decochar;
        }
        echo PHP_EOL;
    }

    public function createClone(): Product
    {
        $p = null;
        try {
            $p = clone $this;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $p;
    }
}
