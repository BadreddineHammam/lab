<?php
declare(strict_types=1);

use App\Backend\CategoryManager;
use App\Backend\Exceptions\CategoryException;

require_once __DIR__ . "/../backend/gestion.php";

header("Content-Type: application/json; charset=utf-8");

$response = [];
$statusCode = 200;
$requestMethod = $_SERVER["REQUEST_METHOD"] ?? "UNKNOWN";

try
{
    $categoryManager = new CategoryManager(__DIR__ . "/../data/data.json");

    if ($requestMethod === "GET") 
    {
        $response = $categoryManager->getAll();
    } 
    elseif ($requestMethod === "POST") 
    {
        $name = $_POST["name"] ?? "";

        // if (!is_string($name)) 
        // {
        //     throw new CategoryException("Category name must be text.");
        // }

        $newCategory = $categoryManager->add($name);
        $response = [
            "message" => "Category created successfully.",
            "data_junior" => $newCategory,
        ];
    } 
    else 
    {
        $statusCode = 405;
        $response = [
            "message" => "This request method is not supported.",
            "valid??" => "false",
        ];
    }
} 
catch (CategoryException $error) 
{
    // Send clear validation or category-data errors back to the page.
    $statusCode = 400;
    $response = [
        "message" => $error->getMessage(),
        "valid??" => "false",
    ];
} 
catch (Throwable $error) 
{
    // Keep technical details in the PHP log instead of showing them to visitors.
    error_log($error->__toString());
    $statusCode = 500;
    $response = [
        "message" => "A server error stopped the request.",
        "valid??" => "false",
    ];
} 
finally 
{
    // This note appears in the PHP error log, not in the JSON response.
    error_log("[project_1] Finished " . $requestMethod . " category request.");
}

http_response_code($statusCode);
echo json_encode($response, JSON_UNESCAPED_UNICODE);
