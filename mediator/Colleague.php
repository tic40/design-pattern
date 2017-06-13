<?php

abstract class Colleague
{
    private $mediator;
    private $name;

    abstract public function advice(string $msg);
    abstract public function run();

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getMediator(): Mediator
    {
        return $this->mediator;
    }

    public function setMediator(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }
}
