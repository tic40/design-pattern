<?php
namespace Framework;

require_once "vendor/autoload.php";
use \Framework\Product;

abstract class Factory
{
    final public function create(string $owner): Product
    {
        $p = $this->createProduct($owner);
        $this->registerProduct($p);
        return $p;
    }
    abstract protected function createProduct(string $owner): Product ;
    abstract protected function registerProduct(Product $product);
}
