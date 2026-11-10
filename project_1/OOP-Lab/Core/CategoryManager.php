<?php

namespace App\Core;

use App\Classes\AbstractCategory;

class CategoryManager
{
    private array $categories = [];

    private static int $totalCategories = 0;

    public function addCategory(AbstractCategory $category): void
    {
        $this->categories[] = $category; 
    
        self::$totalCategories++; 
    }

    public function displayCategories(): void
    {
        foreach ($this->categories as $category) {
            echo $category->getDetails() . PHP_EOL;
        }
    }

    public static function getTotalCategories(): int
    {
        return self::$totalCategories;
    }
}