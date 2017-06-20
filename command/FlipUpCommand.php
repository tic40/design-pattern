<?php

class FlipUpCommand implements Command
{
    private $theLight;

    public function FlipUpCommand(Light $light)
    {
        $this->theLight = $light;
    }

    public function execute()
    {
        $this->theLight->turnOn();
    }

    public function __toString() : string
    {
        return get_class($this);
    }
}
