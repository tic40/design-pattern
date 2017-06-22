<?php

// <command> ::= <repeat command> | <primitive command>
class CommandNode extends Node
{
    private $node;

    public function parse(Context $context)
    {
        if ($context->currentToken()->equals("repeat")) {
            $node = new RepeatCommandNode();
            $node->parse($context);
        } else {
            $node = new PrimitiveCommandNode();
            $node->parse($context);
        }
    }

    public function __toString(): string
    {
        return $node->toString();
    }
}
