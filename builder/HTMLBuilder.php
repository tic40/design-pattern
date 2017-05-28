<?php
class HTMLBuilder extends Builder
{
    private $filename;
    private $writer;

    public function makeTitle(string $title)
    {
        $this->filename = $title . ".html";

        try {
            $this->writer = fopen($this->filename, 'w');
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        $this->write("<html><head><title>" . $title . "</title></head><body>");
        $this->write("<h1>" . $title . "</h1>");
    }

    public function makeString(string $str)
    {
        $this->write("<p>" . $str . "</p>");
    }

    public function makeItems(array $items)
    {
        $this->write("<ul>");
        for ($i = 0; $i < count($items); $i++) {
            $this->write("<li>" . $items[$i] . "</li>");
        }
        $this->write("</ul>");
    }

    public function write(string $str)
    {
        fwrite($this->writer, $str . PHP_EOL);
    }

    public function close()
    {
        $this->write("</body></html>");
        fclose($this->writer);
    }

    public function getResult(): string
    {
        return $this->filename;
    }
}
