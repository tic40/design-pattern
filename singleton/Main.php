<?php
require_once __DIR__ . "/Singleton.php";

$obj1 = Singleton::getInstance();
$obj2 = Singleton::getInstance();
echo $obj1 === $obj2
    ? "obj1とobj2は同じインスタンスです。"
    : "obj1とobj2は同じインスタンスではありません。";
