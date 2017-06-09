<?php

class NoSupport extends Support
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    protected function resolve(Trouble $trouble): bool
    {
        return false;
    }
}
