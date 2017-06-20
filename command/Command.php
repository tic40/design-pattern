<?php

interface Command
{
    public function execute();
    public function __toString(): string;
}
