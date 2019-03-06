<?php

declare(strict_types=1);

namespace Foggyline\Catalog\Model;

class Category
{
    protected $title;
    protected $products;

    public function __construct(string $title, array $products)
    {
        $this->title = $title;
        $this->products = $products;
       // var_dump($this->products);
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getProducts(): array
    {
        return $this->products;
    }
}

