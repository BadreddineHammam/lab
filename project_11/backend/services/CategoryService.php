<?php

require_once __DIR__ . "/../dao/CategoryDAO.php";
require_once __DIR__ . "/BaseService.php";

class CategoryService extends BaseService
{
    private CategoryDAO $categoryDAO;

    public function __construct(string $dataFile)
    {
        $this->categoryDAO = new CategoryDAO($dataFile);
    }

    public function listCategories(): array
    {
        $data = [];

        foreach ($this->categoryDAO->getAll() as $category) {
            $data[] = [
                "id" => $category->getId(),
                "name" => $category->getName(),
            ];
        }

        return $data;
    }

    public function addCategory(string $name): array
    {
        $name = trim($name);

        if ($name === "") {
            throw new InvalidArgumentException("The category name is required.");
        }

        $category = $this->categoryDAO->add($name);

        return [
            "id" => $category->getId(),
            "name" => $category->getName(),
        ];
    }
}
