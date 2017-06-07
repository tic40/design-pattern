<?php
require_once __DIR__ . "/Director.php";
require_once __DIR__ . "/Builder.php";
require_once __DIR__ . "/TextBuilder.php";
require_once __DIR__ . "/HTMLBuilder.php";

echo "1:plain, 2:html :";
$input = intval(trim(fgets(STDIN)));
if ($input === 1) {
    $textbuilder = new TextBuilder();
    $director = new Director($textbuilder);
    $director->create();
    $result = $textbuilder->getResult();
    echo $result;
} elseif ($input === 2) {
    $htmlbuilder = new HTMLBuilder();
    $director = new Director($htmlbuilder);
    $director->create();
    $filename = $htmlbuilder->getResult();
    echo $filename . "が作成されました。";
} else {
    usage();
    exit;
}

function usage()
{
    echo "Usage: plain プレーンテキストで文書作成";
    echo PHP_EOL;
    echo "Usage: html HTMLファイルで文書作成";
}
