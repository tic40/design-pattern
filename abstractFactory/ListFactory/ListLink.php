<?php
namespace ListFactory;

class ListLink extends \Factory\Link
{
    public function __construct(string $caption, string $url)
    {
        parent::__construct($caption, $url);
    }

    public function makeHTML(): string
    {
        return "  <li><a href=\"" . $this->url . "\">" . $this->caption . "</a></li>\n";
    }
}
