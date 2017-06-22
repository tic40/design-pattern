<?php

// <primitive command> ::= go | right | left
class PrimitiveCommandNode extends Node
{
    private $name;

    public function parse(Context $context)
    {
        $this->name = $context->currentToken();
        $context->skipToken($this->name);
        if ($this->name !== "go"
            && $this->name !== "right"
            && $this->name !== "left") {
            throw new ParseException("{$this->name} is undefined");
        }
    }

    public function __toString(): string
    {
        return $this->name ?? "";
    }
}
