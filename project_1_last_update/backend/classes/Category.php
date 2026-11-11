<?php

// Load the interface and abstract class used by Category.
require_once __DIR__ . "/CategoryAbstractions.php";

class Category extends AbstractCategory
{
    public function getDetails(): string
    {
        return "Category #{$this->getId()}: {$this->getName()}";
    }
}
