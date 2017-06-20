<?php

class MySwitch
{
    private $history = [];

    public function storeAndExecute(Command $cmd)
    {
        $this->history[] = $cmd;
        $cmd->execute();
    }
}
