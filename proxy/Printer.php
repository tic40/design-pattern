<?php

class Printer implements Printable
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->heavyJob("Printerのインスタンス(" . $this->name . ")を生成中");
    }

    public function setPrinterName(string $name)
    {
        $this->name = $name;
    }

    public function getPrinterName(): string
    {
        return $this->name;
    }

    public function print(string $string)
    {
        echo "=== {$this->name} ===" . PHP_EOL;
        echo $string;
    }

    private function heavyJob(string $msg)
    {
        echo $msg;
        for ($i = 0; $i < 5; $i++) {
            sleep(1);
            echo ".";
        }
        echo "完了." . PHP_EOL;
    }
}
