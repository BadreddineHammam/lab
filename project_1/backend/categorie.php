<?php
declare(strict_types=1);

namespace App\Backend;

// This class represents one category and converts it to the JSON-friendly format.
class Category
{
    public function __construct(
        public string $name,
        public int $id
    ) 
    {
        
    }

    public function toArray(): array
    {
        return [
            "name" => $this->name,
            "id" => $this->id,
        ];
    }
}
