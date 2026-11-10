<?php

namespace App\Interfaces;

interface CategoryInterface
{
    public function getName(): string;

    public function getDetails(): string;
}