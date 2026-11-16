<?php

interface CategoryInterface
{
    public function getDetails(): string;
}

final class CourseCategory implements CategoryInterface
{
    public function getDetails(): string
    {
        return 'Formation : PHP';
    }
}

final class ProductCategory implements CategoryInterface
{
    public function getDetails(): string
    {
        return 'Produit : Clavier';
    }
}

function displayCategory(CategoryInterface $category): void
{
    echo $category->getDetails(), PHP_EOL; 
}

displayCategory(new CourseCategory());
displayCategory(new ProductCategory());
