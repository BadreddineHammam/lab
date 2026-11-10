<?php

// Load the files
require_once __DIR__ . '/Interfaces/CategoryInterface.php';

require_once __DIR__ . '/Classes/AbstractCategory.php';
require_once __DIR__ . '/Classes/CourseCategory.php';
require_once __DIR__ . '/Classes/ProductCategory.php';

require_once __DIR__ . '/Core/CategoryManager.php';

// Import the classes
use App\Classes\CourseCategory;
use App\Classes\ProductCategory;
use App\Core\CategoryManager;

// Create the manager
$manager = new CategoryManager();

// Create categories
$course1 = new CourseCategory(
    "PHP",
    "Learn PHP programming"
);

$course2 = new CourseCategory(
    "JavaScript",
    "Learn JavaScript"
);

$product1 = new ProductCategory(
    "Laptop",
    "Electronic device"
);

// Add categories to the manager
$manager->addCategory($course1);
$manager->addCategory($course2);
$manager->addCategory($product1);

// Display categories
echo "MY CATEGORIES:\n";

$manager->displayCategories();

// Display total categories
echo "\nTotal categories: ";

echo CategoryManager::getTotalCategories();