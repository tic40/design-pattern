<?php
namespace PageMaker;

class Database
{
    const DB_BASE_DIR = __DIR__ . '/../Database/';

    private function __construct()
    {
    }

    public static function getProperties(string $dbname)
    {
        $filename = self::DB_BASE_DIR . $dbname . ".txt";
        try {
            $prop = parse_ini_file($filename);
            if (empty($prop)) {
                throw new \Exception("[warning] " . $filename . " is not found." . PHP_EOL);
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
        return $prop;
    }
}
