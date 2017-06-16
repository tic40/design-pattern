<?php

class NightState implements State
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
        if (9 <= $hour && $hour < 17) {
            $context->changeState(DayState::getInstance());
        }
    }

    public function doUse(Context $context)
    {
        $context->callSecurityCenter("emergency：use the strongbox at nighttime");
    }

    public function doAlarm(Context $context)
    {
        $context->callSecurityCenter("security alert(nighttime)");
    }

    public function doPhone(Context $context)
    {
        $context->recordLog("sound quality at nighttime");
    }

    public function __toString(): string
    {
        return "[nighttime]";
    }
}
