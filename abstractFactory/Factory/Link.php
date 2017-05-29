<?php
namespace Factory;

abstract class Link extends Item
{
    protected $url;

    public function __construct(string $caption, string $url)
    {
        $this->url = $url;
        parent::__construct($caption);
    }
}
