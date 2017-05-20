<?php
require_once "vendor/autoload.php";
use Framework\Manager;

require "MessageBox.php";
require "UnderlinePen.php";

$manager = new Manager();
$upen = new UnderlinePen('~');
$mbox = new MessageBox('*');
$sbox = new MessageBox('/');
$manager->register("strong message", $upen);
$manager->register("warning box", $mbox);
$manager->register("slash box", $sbox);

$p1 = $manager->create("strong message");
$p1->use("Hello, world.");
$p2 = $manager->create("warning box");
$p2->use("Hello, world.");
$p3 = $manager->create("slash box");
$p3->use("Hello, world.");
