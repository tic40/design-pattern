<?php
class TextBuilder extends Builder
{
    private $buffer = "";

    public function makeTitle(string $title)
    {
        $this->append("==============================\n");
        $this->append("『" . $title . "』\n");
        $this->append(PHP_EOL);
    }

    public function makeString(string $str)
    {
        $this->append('■' . $str . PHP_EOL);
        $this->append(PHP_EOL);
    }

    public function makeItems(array $items)
    {
        for ($i = 0; $i < count($items); $i++) {
            $this->append("　・" . $items[$i] . PHP_EOL);
        }
        $this->append(PHP_EOL);
    }

    public function close()
    {
        $this->append("==============================\n");
    }

    public function getResult(): string
    {
        return $this->buffer;
    }

    public function append(string $str)
    {
        $this->buffer .= $str;
    }
}
