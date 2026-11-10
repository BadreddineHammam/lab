<?php

namespace App\Classes;

class CourseCategory extends AbstractCategory
{
    public function getDetails(): string
    {
        return "Course: " . $this->getName() .
               " - " . $this->getDescription();
    }
}