<?php
class Banner
{
    private $string;

    public function __construct(string $string) {
        $this->string = $string;
    }

    public function showWithParen() {
        echo "(" . $this->string . ")" . PHP_EOL;
    }

    public function showWithAster() {
        echo "*" . $this->string . "*" . PHP_EOL;
    }
}

interface PrintInterface
{
    public function printWeak();
    public function printStrong();
}

class PrintBanner extends Banner implements PrintInterface {
    public function printWeak() {
        $this->showWithParen();
    }
    public function printStrong() {
        $this->showWithAster();
    }
}

$p = new PrintBanner("Hello");
$p->printWeak();
$p->printStrong();
