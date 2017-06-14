<?php
require_once __DIR__ . "/vendor/autoload.php";

use Game\Memento;
use Game\Gamer;

$gamer = new Gamer(100);
$memento = $gamer->createMemento();

for ($i = 0; $i < 50; $i++) {
    echo "==== " . $i . PHP_EOL;
    echo "現状:" . $gamer . PHP_EOL;
    $gamer->bet();
    echo "所持金は" . $gamer->getMoney() . "円になりました。" . PHP_EOL;

    if ($gamer->getMoney() > $memento->getMoney()) {
        echo "    （だいぶ増えたので、現在の状態を保存しておこう）" . PHP_EOL;
        $memento = $gamer->createMemento();
    } elseif ($gamer->getMoney() < $memento->getMoney() / 2) {
        echo "    （だいぶ減ったので、以前の状態に復帰しよう）" . PHP_EOL;
        $gamer->restoreMemento($memento);
    }
    sleep(1);
    echo PHP_EOL;
}
