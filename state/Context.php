<?php

class Context
{
    private $state;

    public function __construct(State $state = null)
    {
        if ($state instanceof State) {
            $this->state = $state;
        } else {
            $this->state = DayState::getInstance();
        }
    }

    public function setClock(int $hour)
    {
        $clockstring = "now: ";
        if ($hour < 10) {
            $clockstring .= "0" . $hour . ":00";
        } else {
            $clockstring .= $hour . ":00";
        }
        echo $clockstring . PHP_EOL;
        $this->state->doClock($this, $hour);
    }

    public function changeState(State $state)
    {
        echo "state is change from " . $this->state . " to " . $state . PHP_EOL;
        $this->state = $state;
    }

    public function callSecurityCenter(string $msg)
    {
        echo "call! " . $msg . PHP_EOL;
    }

    public function recordLog(string $msg)
    {
        echo "record ... " . $msg . PHP_EOL;
    }

    public function doRandomAction()
    {
        switch (rand(0, 2)) {
            case 0:
                $this->state->doUse($this);
                break;
            case 1:
                $this->state->doAlarm($this);
                break;
            case 2:
                $this->state->doPhone($this);
                break;
            default:
                break;
        }
    }
}
