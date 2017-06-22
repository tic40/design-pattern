<?php
require_once __DIR__ . "/Node.php";
require_once __DIR__ . "/CommandListNode.php";
require_once __DIR__ . "/CommandNode.php";
require_once __DIR__ . "/Context.php";
require_once __DIR__ . "/ParseException.php";
require_once __DIR__ . "/PremitiveCommandNode.php";
require_once __DIR__ . "/ProgramNode.php";
require_once __DIR__ . "/RepeatCommandNode.php";

$f = file(__DIR__ . "/Program.txt", FILE_IGNORE_NEW_LINES);
if (empty($f)) {
    die('file read error.');
}

foreach ($f as $v) {
    echo "text = \"" . $v . "\"" . PHP_EOL;
    $node = new ProgramNode();
    $node->parse(new Context($v));
    echo "node = " . $node . PHP_EOL;
}
