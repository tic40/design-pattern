<?php

class Hand
{
    const HANDVALUES = [0,1,2];
    private $handvalue;

    private function __construct(int $handvalue)
    {
        $this->handvalue = $handvalue;
    }

    public static function getHand(int $handvalue): Hand
    {
        return new self(self::HANDVALUES[$handvalue]);
    }

    public function isStrongerThan(Hand $h): bool
    {
        return $this->fight($h) === 1;
    }

    public function isWeakerThan(Hand $h): bool
    {
        return $this->fight($h) === -1;
    }

    private function fight(Hand $h): int
    {
        if ($this === $h) {
            return 0;
        } elseif (($this->handvalue + 1) % 3 === $h->handvalue) {
            return 1;
        }

        return -1;
    }
}
