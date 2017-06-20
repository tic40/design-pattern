<?php

require_once __DIR__ . "/MySwitch.php";
require_once __DIR__ . "/Command.php";
require_once __DIR__ . "/FlipDownCommand.php";
require_once __DIR__ . "/FlipUpCommand.php";
require_once __DIR__ . "/Light.php";

$lamp = new Light();
$switchUp = new FlipUpCommand($lamp);
$switchDown = new FlipDownCommand($lamp);
$mySwitch = new MySwitch();

for($i = 0; $i < 10; $i++) {
    if (boolval(rand(0, 1))) {
        $mySwitch->storeAndExecute($switchUp);
    } else {
        $mySwitch->storeAndExecute($switchDown);
    }
    usleep(50000); // wait 0.5 sec
}
echo PHP_EOL . "=== command history ===" . PHP_EOL;
$mySwitch->displayHistory();
