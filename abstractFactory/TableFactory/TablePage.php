<?php
namespace TableFactory;

class TablePage extends \Factory\Page
{
    public function __construct(string $title, string $author)
    {
        parent::__construct($title, $author);
    }

    public function makeHTML(): string
    {
        $buffer = "";
        $buffer.= "<html><head><title>" . $this->title . "</title></head>\n";
        $buffer.= "<body>\n";
        $buffer.= "<h1>" . $this->title . "</h1>\n";
        $buffer.= "<table width=\"80%\" border=\"3\">\n";

        if (empty($this->content) === false) {
            foreach ($this->content as $v) {
                $buffer.= "<tr>" . $v->makeHTML() . "</tr>";
            }
        }

        $buffer.= "</table>\n";
        $buffer.= "<hr><address>" . $this->author . "</address>";
        $buffer.= "</body></html>\n";

        return $buffer;
    }
}
