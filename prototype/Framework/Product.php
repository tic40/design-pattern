<?php
namespace Framework;

interface Product
{
    public function use(string $s);
    public function createClone(): Product;
}
