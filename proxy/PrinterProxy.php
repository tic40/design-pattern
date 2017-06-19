<?php

class PrinterProxy implements Printable
{
    private $name;
    private $real;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function setPrinterName(string $name)
    {
        if ($this->real !== null) {
            $this->real->setPrinterName($name);
        }
        $this->name = $name;
    }

    public function getPrinterName(): string
    {
        return $this->name;
    }

    public function print(string $string)
    {
        $this->realize();
        $this->real->print($string);
    }

    private function realize()
    {
        if ($this->real === null) {
            $this->real = new Printer($this->name);
        }
    }
}
