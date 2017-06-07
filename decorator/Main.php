<?php
require_once __DIR__ . "/Display.php";
require_once __DIR__ . "/Border.php";
require_once __DIR__ . "/StringDisplay.php";
require_once __DIR__ . "/FullBorder.php";
require_once __DIR__ . "/SideBorder.php";

$b1 = new StringDisplay("Hello, world.");
$b2 = new SideBorder($b1, '#');
$b3 = new FullBorder($b2);
$b4 = new SideBorder(
    new FullBorder(
        new FullBorder(
            new SideBorder(
                new FullBorder(
                    new StringDisplay("Hello, world!")
                ),
               '*'
            )
        )
    ),
    '/'
);

$b1->show();
$b2->show();
$b3->show();
$b4->show();
