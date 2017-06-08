<?php

class ListVisitor extends Visitor
{
    private $currentdir = "";

    public function visitFile(File $file)
    {
        echo $this->currentdir . "/" . $file . PHP_EOL;
    }

    public function visitDirectory(MyDirectory $directory)
    {
        echo $this->currentdir . "/" . $directory . PHP_EOL;
        $savedir = $this->currentdir;
        $this->currentdir = $this->currentdir . "/" . $directory->getName();

        foreach ($directory->iterator() as $v) {
            $v->accept($this);
        }
        $this->currentdir = $savedir;
    }
}
