<?php

// <repeat command> ::= repeat <number> <command list>
class RepeatCommandNode extends Node
{
    private $number;
    private $commandListNode;

    public function parse(Context $context)
    {
        $context->skipToken("repeat");
        $this->number = $context->currentNumber();
        $context->nextToken();
        $this->commandListNode = new CommandListNode();
        $this->commandListNode->parse($context);
    }
    public function __toString(): string
    {
        return $this->commandListNode
            ? "[repeat {$this->number} {$this->commandListNode}]"
            : "";
    }
}
