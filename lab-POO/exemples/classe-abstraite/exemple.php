<?php

abstract class AbstractCategory
{
    public function __construct(
        private string $name,
        private string $description
    ) {
    }

    abstract public function getDetails(): string;

    protected function getName(): string
    {
        return $this->name;
    }

    protected function getDescription(): string
    {
        return $this->description;
    }
}

final class CourseCategory extends AbstractCategory //final means that a class cannot be inherited (extended) by another class.
{
    public function getDetails(): string
    {
        return 'Formation : ' . $this->getName() 
        . ' - ' . $this->getDescription();
    }
}

$category = new CourseCategory('PHP', 'Apprendre la programmation PHP'); //PHP predefined constant that represents a newline (line break).
echo $category->getDetails(), PHP_EOL;
