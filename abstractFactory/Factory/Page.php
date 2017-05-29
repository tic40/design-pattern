<?php
namespace Factory;

abstract class Page
{
    protected $title;
    protected $author;
    protected $content;

    public function __construct(string $title, string $author)
    {
        $this->title = $title;
        $this->author = $author;
        $content = [];
    }

    public function add(Item $item)
    {
        $this->content[] = $item;
    }

    public function output()
    {
        try {
            $filename = $this->title . ".html";
            $writer = fopen($filename, 'w');
            fwrite($writer, $this->makeHTML() . PHP_EOL);
            fclose($writer);
            echo $filename . " を作成しました。" . PHP_EOL;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    abstract public function makeHTML(): string;
}
