<?php

// <command list> ::= <command>* end
class CommandListNode extends Node
{
    private $list = [];

    public function parse(Context $context)
    {
        while (true) {
            if ($context->currentToken() == null) {
                throw new ParseException("Missing 'end'");
            } elseif ($context->currentToken() === "end") {
                $context->skipToken("end");
                break;
            } else {
                $commandNode = new CommandNode();
                $commandNode->parse($context);
                $this->list[] = $commandNode;
            }
        }
    }

    public function __toString(): string
    {
        return $this->list
            ? "[" . join(" ", $this->list) . "]"
            : "[]";
    }
}
