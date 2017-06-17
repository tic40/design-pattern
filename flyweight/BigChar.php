<?php

class BigChar
{
    const DATA_DIR = __DIR__ . "/Data/";
    private $charname;
    private $fontdata;

    public function __construct(string $charname)
    {
        $this->charname = $charname;
        try {
            $contents = file_get_contents(self::DATA_DIR . "big" . $charname . ".txt");
            if ($contents === false) {
                throw new Exception("the file big{$charname}.txt does not exist.");
            }
            $this->fontdata = $contents;
        } catch (Exception $e) {
            echo "error: " . $e->getMessage();
        }
    }

    public function print()
    {
        echo $this->fontdata;
    }
}
