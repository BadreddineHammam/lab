<?php

require_once __DIR__ . "/../backend/dao/CategoryDAO.php";
require_once __DIR__ . "/../backend/services/CategoryService.php";

$file = sys_get_temp_dir() . "/project_1_categories_" . uniqid() . ".json";
file_put_contents($file, "[]");

try {
    $service = new CategoryService($file);
    $category = $service->addCategory("Programming");

    if ($category["id"] !== 1 || count($service->listCategories()) !== 1) {
        throw new RuntimeException("Category creation or listing failed.");
    }

    try {
        $service->addCategory("");
        throw new RuntimeException("An empty category name was accepted.");
    } catch (InvalidArgumentException $error) {
        echo "Empty-name check works.\n";
    }

    try {
        $service->addCategory("programming");
        throw new RuntimeException("A duplicate category was accepted.");
    } catch (InvalidArgumentException $error) {
        echo "Duplicate-name check works.\n";
    }

    echo "Category test passed.\n";
} finally {
    unlink($file);
}
