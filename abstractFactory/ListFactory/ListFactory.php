<?php
namespace ListFactory;

class ListFactory extends \Factory\Factory
{
    public function createLink(string $caption, string $url): \Factory\Link
    {
        return new ListLink($caption, $url);
    }
    public function createTray(string $caption): \Factory\Tray
    {
        return new ListTray($caption);
    }
    public function createPage(string $title, string $author): \Factory\Page
    {
        return new ListPage($title, $author);
    }
}
