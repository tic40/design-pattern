<?php

abstract class Visitor
{
    public function visit($object)
    {
        if ($object instanceof File) {
            $this->visitFile($object);
        } elseif ($object instanceof MyDirectory) {
            $this->visitDirectory($object);
        }
    }

    abstract public function visitFile(File $file);
    abstract public function visitDirectory(MyDirectory $directory);
}
