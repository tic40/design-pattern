<?php
require_once __DIR__ . "/Printable.php";
require_once __DIR__ . "/Printer.php";
require_once __DIR__ . "/PrinterProxy.php";

$p = new PrinterProxy("Alice");
echo "名前は現在" . $p->getPrinterName() . "です。" . PHP_EOL;
$p->setPrinterName("Bob");
echo "名前は現在" . $p->getPrinterName() . "です。" . PHP_EOL;
$p->print("Hello, world.");
