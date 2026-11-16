<?php

interface CategoryInterface
{
    public function getName(): string;

    public function getDetails(): string;
}

final class CourseCategory implements CategoryInterface
{
    public function __construct(private string $name)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDetails(): string
    {
        return 'Formation : ' . $this->getName();
    }
}

$category = new CourseCategory('PHP');
echo $category->getDetails(), PHP_EOL;
