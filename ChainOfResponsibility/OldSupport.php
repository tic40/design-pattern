<?php

class OddSupport extends Support
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    protected function resolve(Trouble $trouble): bool
    {
        return $trouble->getNumber() % 2 == 1 ? true : false;
    }
}
