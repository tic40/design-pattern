<?php
namespace Factory;

abstract class Factory
{
    public static function getFactory(string $classname): Factory
    {
        $factory = null;
        try {
            $factory = new $classname;
        } catch (Exception $e) {
            die($e->getMessage());
        }
        return $factory;
    }

    abstract public function createLink(string $caption, string $url): Link;
    abstract public function createTray(string $caption): Tray;
    abstract public function createPage(string $title, string $author): Page;
}
