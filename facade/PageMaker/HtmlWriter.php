<?php
namespace PageMaker;

class HtmlWriter
{
    private $writer = "";
    private $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    public function title(string $title)
    {
        $this->writer.= "<html>\n"
            . "<head>\n"
            . "<title>" . $title . "</title>\n"
            . "</head>\n"
            . "<body>\n"
            . "<h1>" . $title . "</h1>\n";
    }

    public function paragraph(string $msg)
    {
        $this->writer.= "<p>" . $msg . "</p>\n";
    }

    public function link(string $href, string $caption)
    {
        $this->paragraph("<a href=\"" . $href . "\">" . $caption . "</a>");
    }

    public function mailto(string $mailaddr, string $username)
    {
        $this->link("mailto:" . $mailaddr, $username);
    }

    public function close()
    {
        $this->writer.= "</body>\n"
            . "</html>\n";
        file_put_contents($this->filename, $this->writer);
    }
}
