<?php

namespace App\Classes;

class ProductCategory extends AbstractCategory
{
    public function getDetails(): string
    {
        return "Product: " . $this->getName() .
               " - " . $this->getDescription();
    }
}