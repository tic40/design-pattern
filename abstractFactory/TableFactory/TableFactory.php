<?php
namespace TableFactory;

class TableFactory extends \Factory\Factory
{
    public function createLink(string $caption, string $url): \Factory\Link
    {
        return new TableLink($caption, $url);
    }

    public function createTray(string $caption): \Factory\Tray
    {
        return new TableTray($caption);
    }

    public function createPage(string $title, string $author): \Factory\Page
    {
        return new TablePage($title, $author);
    }
}
