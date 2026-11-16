<?php

class Category
{
    public function __construct(private string $name)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }
}

final class CourseCategory extends Category
{
    public function getDetails(): string
    {
        return 'Formation : ' . $this->getName(); 
    }
}

$category = new CourseCategory('PHP');
echo $category->getDetails(), PHP_EOL;
