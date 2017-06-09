<?php

require_once __DIR__ . '/Support.php';
require_once __DIR__ . '/Trouble.php';
require_once __DIR__ . '/NoSupport.php';
require_once __DIR__ . '/OldSupport.php';
require_once __DIR__ . '/LimitSupport.php';
require_once __DIR__ . '/SpecialSupport.php';

$alice = new NoSupport("Alice");
$bob = new LimitSupport("Bob", 100);
$charlie = new SpecialSupport("Charlie", 429);
$diana = new LimitSupport("Diana", 200);
$elmo = new OddSupport("Elmo");
$fred = new LimitSupport("Fred", 300);

$alice->setNext($bob)
    ->setNext($charlie)
    ->setNext($diana)
    ->setNext($elmo)
    ->setNext($fred);

for ($i = 0; $i < 500; $i += 33) {
    $alice->support(new Trouble($i));
}
