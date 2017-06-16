<?php

interface State
{
    public function doClock(Context $context, int $hour);
    public function doUse(Context $context);
    public function doAlarm(Context $context);
    public function doPhone(Context $context);
}
