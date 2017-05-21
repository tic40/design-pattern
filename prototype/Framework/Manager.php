<?php
namespace Framework;

class Manager
{
    private $showcase = [];

    public function register(string $name, Product $proto)
    {
        $this->showcase[$name] = $proto;
    }

    public function create(string $protoname): Product
    {
        $p = $this->showcase[$protoname];
        return $p->createClone();
    }
}
