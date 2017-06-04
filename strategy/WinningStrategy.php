<?php

class WinningStrategy implements Strategy
{
    private $random;
    private $won = false;
    private $prevHand;

    public function __construct(int $seed)
    {
        srand($seed);
        $this->random = rand();
    }

    public function nextHand(): Hand
    {
        if (!$this->won) {
            $this->prevHand = Hand::getHand(rand() % 3);
        }
        return $this->prevHand;
    }

    public function study(bool $win)
    {
        $this->won = $win;
    }
}
