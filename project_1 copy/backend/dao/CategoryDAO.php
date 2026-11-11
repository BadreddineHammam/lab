<?php

require_once __DIR__ . "/../classes/Category.php";

class CategoryDAO
{
    private string $dataFile;

    public function __construct(string $dataFile)
    {
        $this->dataFile = $dataFile;
    }

    public function getAll(): array
    {
        $json = file_get_contents($this->dataFile);

        if ($json === false) {
            throw new RuntimeException("The category file could not be read.");
        }

        $data = json_decode($json, true);

        if (!is_array($data)) {
            throw new RuntimeException("The category file does not contain a valid list.");
        }

        $categories = [];

        foreach ($data as $item) {
            if (
                !is_array($item)
                || !isset($item["id"], $item["name"])
                || !is_int($item["id"])
                || !is_string($item["name"])
            ) {
                throw new RuntimeException("A category in the file has invalid information.");
            }

            $categories[] = new Category($item["id"], $item["name"]);
        }

        return $categories;
    }

    public function add(string $name): Category
    {
        $categories = $this->getAll();
        $ids = [];

        foreach ($categories as $category) {
            if (strcasecmp($category->getName(), $name) === 0) {
                throw new InvalidArgumentException("This category already exists.");
            }

            $ids[] = $category->getId();
        }

        $newCategory = new Category(
            $ids === [] ? 1 : max($ids) + 1,
            $name
        );
        $categories[] = $newCategory;

        $data = [] ;
        foreach ($categories as $category) {
            $data[] = [
                "id" => $category->getId(),
                "name" => $category->getName(),
            ];
        }

        $json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

        if ($json === false || file_put_contents($this->dataFile, $json, LOCK_EX) === false) {
            throw new RuntimeException("The categories could not be saved.");
        }

        return $newCategory;
    }
}
