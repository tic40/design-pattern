<?php

class LimitSupport extends Support
{
    private $limit;

    public function __construct(string $name, int $limit)
    {
        parent::__construct($name);
        $this->limit = $limit;
    }

    protected function resolve(Trouble $trouble): bool
    {
        return $trouble->getNumber() < $this->limit ? true : false;
    }
}
