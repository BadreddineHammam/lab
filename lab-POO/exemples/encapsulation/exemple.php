<?php

final class Category
{
    public function __construct(private string $name)
    {
        $this->name = trim($name);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function rename(string $name): void
    {
        $this->name = trim($name);
    }
}

$category = new Category('  PHP  ');
echo 'Nom : ', $category->getName(), PHP_EOL;
$category->rename('POO');
echo 'Nouveau nom : ', $category->getName(), PHP_EOL;
