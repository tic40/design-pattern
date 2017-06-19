<?php

interface Printable
{
    public function setPrinterName(string $name);
    public function getPrinterName(): string;
    public function print(string $string);
}
