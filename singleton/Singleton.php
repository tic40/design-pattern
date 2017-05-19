<?php
class Singleton
{
    private static $singleton;

    private function __construct()
    {
        echo("インスタンスを生成しました。" . PHP_EOL);
    }

    public static function getInstance(): Singleton
    {
        if (isset(self::$singleton) === false) {
            self::$singleton = new self;
        }
        return self::$singleton;
    }
}
