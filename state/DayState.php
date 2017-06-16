<?php

class DayState implements State
{
    private static $singleton;

    private function __construct()
    {
    }

    public static function getInstance(): State
    {
        if (self::$singleton === null) {
            self::$singleton = new self;
        }
        return self::$singleton;
    }

    public function doClock(Context $context, int $hour)
    {
        if ($hour < 9 || 17 <= $hour) {
            $context->changeState(NightState::getInstance());
        }
    }

    public function doUse(Context $context)
    {
        $context->recordLog("use the strongbox(daytime)");
    }

    public function doAlarm(Context $context)
    {
        $context->callSecurityCenter("security alert(daytime)");
    }

    public function doPhone(Context $context)
    {
        $context->callSecurityCenter("call security center(daytime)");
    }

    public function __toString(): string
    {
        return "[daytime]";
    }
}
