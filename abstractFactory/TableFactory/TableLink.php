<?php
namespace TableFactory;

class TableLink extends \Factory\Link
{
    public function __construct(string $caption, string $url)
    {
        parent::__construct($caption, $url);
    }

    public function makeHTML(): string
    {
        return "<td><a href=\"" . $this->url . "\">" . $this->caption . "</a></td>\n";
    }
}
