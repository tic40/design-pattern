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
}
