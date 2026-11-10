<?php
declare(strict_types=1);

namespace App\Backend;

require_once __DIR__ . '/categorie.php';
require_once __DIR__ . '/Exceptions/CategoryException.php';
require_once __DIR__ . '/Traits/Logger.php';

use App\Backend\Exceptions\CategoryException;
use App\Backend\Traits\Logger;
use JsonException;

// This class reads, creates, and saves categories in the JSON file.
class CategoryManager
{
    use Logger;

    public function __construct(private string $file)
    {
    }

    public function getAll(): array
    {
        $json = file_get_contents($this->file);

        // if ($json === false) {
        //     throw new \RuntimeException("The category file could not be read.");
        // }

        try 
        {
            $categories = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
        } 
        catch (JsonException $error) 
        {
            throw new \RuntimeException("The category file does not contain valid JSON.", 0, $error);
        }

        // if (!is_array($categories)) 
        // {
        //     throw new \RuntimeException("The category file must contain a list.");
        // }

        // foreach ($categories as $category) 
        // {
        //     if (
        //         !is_array($category)
        //         || !isset($category["name"], $category["id"])
        //         || !is_string($category["name"])
        //         || !is_int($category["id"])
        //     ) {
        //         throw new \RuntimeException("A category in the file has invalid information.");
        //     }
        // }

        return $categories;
    }

    public function add(string $name): array
    {
        $name = trim($name);

        // if ($name === "") {
        //     throw new CategoryException("Category name cannot be empty.");
        // }

        $categories = $this->getAll();

        foreach ($categories as $category) {
            if (strcasecmp($category["name"], $name) === 0) {
                throw new CategoryException("A category with this name already exists.");
            }
        }

        $ids = array_column($categories, "id");
        $id = $ids === [] ? 1 : max($ids) + 1;
        $newCategory = new Category($name, $id);
        $categories[] = $newCategory->toArray();

        try 
        {
            $json = json_encode($categories, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR);
        }
        catch (JsonException $error) 
        {
            throw new \RuntimeException("The categories could not be encoded as JSON.", 0, $error);
        }


        
        if (file_put_contents($this->file, $json, LOCK_EX) === false) 
        {
            throw new \RuntimeException("The category file could not be saved.");
        }

        $this->logActivity("Category created: " . $name);

        return $newCategory->toArray();
    }
}
