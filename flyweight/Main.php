<?php
require_once __DIR__ . "/BigString.php";
require_once __DIR__ . "/BigChar.php";
require_once __DIR__ . "/BigCharFactory.php";

echo 'input digits: ';
$input = strval(trim(fgets(STDIN)));
if (strlen($input) === 0) {
    echo "[input error]. please input the example below." . PHP_EOL;
    echo "example: 1212123" . PHP_EOL;
    die();
}
$bs = new BigString($input);
$bs->print();
