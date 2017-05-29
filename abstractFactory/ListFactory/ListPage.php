<?php
namespace ListFactory;

class ListPage extends \Factory\Page
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
        $buffer.= "<ul>\n";

        if (empty($this->content) === false) {
            foreach ($this->content as $v) {
                $buffer.= $v->makeHTML();
            }
        }

        $buffer.= "</ul>\n";
        $buffer.= "<hr><address>" . $this->author . "</address>";
        $buffer.= "</body></html>\n";
        return $buffer;
    }
}
