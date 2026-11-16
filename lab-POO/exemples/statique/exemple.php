<?php

final class CategoryManager
{
    private array $categories = [];
    private static int $totalCategories = 0;

    public function addCategory(string $name): void
    {
        $this->categories[] = $name;
        self::$totalCategories++;
    }

    public static function getTotalCategories(): int
    {
        return self::$totalCategories;
    }
}

$firstManager = new CategoryManager();
$secondManager = new CategoryManager();
$firstManager->addCategory('PHP');
$secondManager->addCategory('JavaScript');

echo 'Total de catégories : ', CategoryManager::getTotalCategories(), PHP_EOL;
