<?php
namespace ListFactory;

class ListTray extends \Factory\Tray
{
    public function __construct(string $caption)
    {
        parent::__construct($caption);
    }
    public function makeHTML(): string
    {
        $buffer = "";
        $buffer.= "<li>\n";
        $buffer.= $this->caption . "\n";
        $buffer.= "<ul>\n";

        if (empty($this->tray) === false) {
            foreach ($this->tray as $v) {
                $buffer.= $v->makeHTML();
            }
        }

        $buffer.= "</ul>\n";
        $buffer.= "</li>\n";
        return $buffer;
    }
}
