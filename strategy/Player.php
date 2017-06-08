<?php

class Player
{
    private $name;
    private $strategy;
    private $wincount = 0;
    private $losecount = 0;
    private $gamecount = 0;

    public function __construct(string $name, Strategy $strategy)
    {
        $this->name = $name;
        $this->strategy = $strategy;
    }

    public function nextHand(): Hand
    {
        return $this->strategy->nextHand();
    }

    public function win()
    {
        $this->strategy->study(true);
        $this->wincount++;
        $this->gamecount++;
    }

    public function lose()
    {
        $this->strategy->study(false);
        $this->losecount++;
        $this->gamecount++;
    }

    public function even()
    {
        $this->gamecount++;
    }

    public function __toString(): string
    {
        return "[" . $this->name . ":" . $this->gamecount . " games, " . $this->wincount . " win, " . $this->losecount . " lose" . "]";
    }
}
