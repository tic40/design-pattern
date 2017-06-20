<?php

class MySwitch
{
    private $history = [];

    public function storeAndExecute(Command $cmd)
    {
        $this->history[] = $cmd;
        $cmd->execute();
    }

    public function displayHistory()
    {
        foreach($this->history as $k => $v) {
            echo "{$k}: {$v}" . PHP_EOL;
        }
    }
}
