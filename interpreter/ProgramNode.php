<?php

// <program> ::= program <command list>
class ProgramNode extends Node
{
    private $commandListNode;

    public function parse(Context $context)
    {
        $context->skipToken("program");
        $this->commandListNode = new CommandListNode();
        $this->commandListNode->parse($context);
    }
    public function __toString(): string
    {
        return "[program {$this->commandListNode} ]";
    }
}
