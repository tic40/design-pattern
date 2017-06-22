<?php

// <repeat command> ::= repeat <number> <command list>
class RepeatCommandNode extends Node
{
    private $number;
    private $commandListNode;

    public function parse(Context $context)
    {
        $context->skipToken("repeat");
        $number = $context->currentNumber();
        $context->nextToken();
        $commandListNode = new CommandListNode();
        $commandListNode->parse($context);
    }
    public function __toString(): string
    {
        return "[repeat {$this->number} {$this->commandListNode}]";
    }
}
