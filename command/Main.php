<?php

require_once __DIR__ . "/MySwitch.php";
require_once __DIR__ . "/Command.php";
require_once __DIR__ . "/FlipDownCommand.php";
require_once __DIR__ . "/FlipUpCommand.php";
require_once __DIR__ . "/Light.php";

echo "input: ";
$input = explode(" ", trim(fgets(STDIN)));

if (count($input) != 1) {
    echo "Argument \"ON\" or \"OFF\" is required.";
    die();
}

$lamp = new Light();
$switchUp = new FlipUpCommand($lamp);
$switchDown = new FlipDownCommand($lamp);
$mySwitch = new MySwitch();

switch (strtoupper($input[0])) {
    case "ON":
        $mySwitch->storeAndExecute($switchUp);
        break;
    case "OFF":
        $mySwitch->storeAndExecute($switchDown);
        break;
    default:
        echo "Argument \"ON\" or \"OFF\" is required." . PHP_EOL;
        die();
}
