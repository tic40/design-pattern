<?php
require_once __DIR__ . "/Observer.php";
require_once __DIR__ . "/DigitObserver.php";
require_once __DIR__ . "/GraphObserver.php";
require_once __DIR__ . "/NumberGenerator.php";
require_once __DIR__ . "/RandomNumberGenerator.php";

$generator = new RandomNumberGenerator();
$observer1 = new DigitObserver();
$observer2 = new GraphObserver();
$generator->addObserver($observer1);
$generator->addObserver($observer2);
$generator->execute();
$generator->deleteObserver($observer2);
$generator->execute();
