<?php

class ConcreteMediator implements Mediator
{
    private $colleagues = [];

    public function addColleague(Colleague $colleague)
    {
        $this->colleagues[]= $colleague;
    }

    public function consultation(Colleague $colleague)
    {
        echo 'consultation form ' . $colleague->getName() . PHP_EOL;
        foreach ($this->colleagues as $v) {
            if ($v->getName() !== $colleague->getName()) {
                $v->advice("consulation from " . $colleague->getName());
            }
        }
    }
}
