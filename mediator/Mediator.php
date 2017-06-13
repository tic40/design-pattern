<?php

interface Mediator
{
    public function addColleague(Colleague $colleague);
    public function consultation(Colleague $colleague);
}
