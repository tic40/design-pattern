<?php
namespace TableFactory;

class TableTray extends \Factory\Tray
{
    public function __construct(string $caption)
    {
        parent::__construct($caption);
    }

    public function makeHTML(): string
    {
        $buffer = "";
        $buffer.= "<td>";
        $buffer.= "<table width=\"100%\" border=\"1\"><tr>";
        $buffer.= "<td bgcolor=\"#cccccc\" align=\"center\" colspan=\"" . count($this->tray) . "\"><b>" . $this->caption . "</b></td>";
        $buffer.= "</tr>\n";
        $buffer.= "<tr>\n";

        if (empty($this->tray) === false) {
            foreach ($this->tray as $v) {
                $buffer.= $v->makeHTML();
            }
        }

        $buffer.= "</tr></table>";
        $buffer.= "</td>";

        return $buffer;
    }
}
