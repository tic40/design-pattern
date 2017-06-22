<?php

// <primitive command> ::= go | right | left
class PrimitiveCommandNode extends Node
{
    private $name;

    public function parse(Context $context)
    {
        $this->name = $context->currentToken();
        $context->skipToken($this->name);
        if (!$this->name->equals("go")
            && !$this->name->equals("right")
            && !$this->name->equals("left")) {
            throw new ParseException($this->name + " is undefined");
        }
    }

    public function toString(): string
    {
        return $this->name;
    }
}
