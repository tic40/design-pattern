<?php
require_once __DIR__ . "/Colleague.php";
require_once __DIR__ . "/Mediator.php";
require_once __DIR__ . "/ConcreteColleagueTypeA.php";
require_once __DIR__ . "/ConcreteColleagueTypeB.php";
require_once __DIR__ . "/ConcreteMediator.php";

$colA = new ConcreteColleagueTypeA("John");
$colB = new ConcreteColleagueTypeB("Sarah");

$mediator = new ConcreteMediator();
$mediator->addColleague($colA);
$mediator->addColleague($colB);

$colA->setMediator($mediator);
$colB->setMediator($mediator);

$colA->run();
$colB->run();
