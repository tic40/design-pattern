<?php
namespace IDCard;

use Framework\Product;

class IDCard extends Product
{
    private $owner;

    public function __construct(string $owner)
    {
        echo($owner . "のカードを作ります。" . PHP_EOL);
        $this->owner = $owner;
    }
    public function use()
    {
        echo($this->owner . "のカードを使います。" . PHP_EOL);
    }
    public function getOwner(): string
    {
        return $this->owner;
    }
}
