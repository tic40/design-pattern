<?php

class FlipDownCommand implements Command
{
    private $theLight;

    public function FlipDownCommand(Light $light)
    {
        $this->theLight = $light;
    }

    public function execute()
    {
        $this->theLight->turnOff();
    }

    public function __toString(): string
    {
        return get_class($this);
    }
}
