<?php

require_once __DIR__ . "/Context.php";
require_once __DIR__ . "/State.php";
require_once __DIR__ . "/DayState.php";
require_once __DIR__ . "/NightState.php";

$states = [
    'dayState' => DayState::getInstance(),
    'nightState' => NightState::getInstance()
];
$messages = [
    'foo'
];
$context = new Context();

for ($hour = 0; $hour < 24; $hour++) {
    $context->setClock($hour);
    $context->doRandomAction();
    sleep(1);
}
