<?php
require_once __DIR__ . "/vendor/autoload.php";

$factory = new IDCard\IDCardFactory();
$card1 = $factory->create("member01");
$card2 = $factory->create("member02");
$card3 = $factory->create("member03");
$card1->use();
$card2->use();
$card3->use();

foreach ($factory->getOwners() as $k => $owner) {
    echo "{$k}:{$owner}" . PHP_EOL;
}
