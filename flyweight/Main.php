<?php
require_once __DIR__ . "/BigString.php";
require_once __DIR__ . "/BigChar.php";
require_once __DIR__ . "/BigCharFactory.php";

$input = strval(trim(fgets(STDIN)));
if (strlen($input) === 0 || ctype_digit($input) === false) {
    echo "[input error]. please input numbers like the example below." . PHP_EOL;
    echo "example: 1212123" . PHP_EOL;
    die();
}
$bs = new BigString($input);
$bs->print();
