<?php

class StringDisplay extends Display
{
    private $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function getColumns(): int
    {
        return strlen($this->string);
    }

    public function getRows(): int
    {
        return 1;
    }

    public function getRowText(int $row)
    {
        if ($row === 0) {
            return $this->string;
        }

        return null;
    }
}
