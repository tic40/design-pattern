<?php
require "Hand.php";
require "Player.php";
require "Strategy.php";
require "ProbStrategy.php";
require "WinningStrategy.php";

$input = explode(" ", trim(fgets(STDIN)));

if (count($input) !== 2) {
    echo "Usage: randomseed1 randomseed2" . PHP_EOL;
    echo "Example: 314 15";
    die();
}

$seed1 = intval($input[0]);
$seed2 = intval($input[1]);
$player1 = new Player("Taro", new WinningStrategy($seed1));
$player2 = new Player("Hana", new ProbStrategy($seed2));

for ($i = 0; $i < 10000; $i++) {
    $nextHand1 = $player1->nextHand();
    $nextHand2 = $player2->nextHand();
    if ($nextHand1->isStrongerThan($nextHand2)) {
        echo "Winner:" . $player1->toString() . PHP_EOL;
        $player1->win();
        $player2->lose();
    } elseif ($nextHand2->isStrongerThan($nextHand1)) {
        echo "Winner:" . $player2->toString() . PHP_EOL;
        $player1->lose();
        $player2->win();
    } else {
        echo "Even..." . PHP_EOL;
        $player1->even();
        $player2->even();
    }
}
echo "Total result:" . PHP_EOL;
echo $player1->toString() . PHP_EOL;
echo $player2->toString() . PHP_EOL;
