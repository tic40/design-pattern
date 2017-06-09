<?php

class SpecialSupport extends Support
{
    private $number;

    public function __construct(string $name, int $number)
    {
        parent::__construct($name);
        $this->number = $number;
    }

    protected function resolve(Trouble $trouble): bool
    {
        return $trouble->getNumber() === $this->number ? true : false;
    }
}
