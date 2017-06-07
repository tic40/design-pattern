<?php
require_once __DIR__ . "/Iterator.php";

$p = new PrintBanner("Hello");
$p->printWeak();
$p->printStrong();
