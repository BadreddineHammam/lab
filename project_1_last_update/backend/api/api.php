<?php

require_once __DIR__ . "/../services/CategoryService.php";

header("Content-Type: application/json; charset=utf-8");

$service = new CategoryService(__DIR__ . "/../data/data.json");
$method = $_SERVER["REQUEST_METHOD"] ?? "GET";

try {
    if ($method === "GET") {
        echo json_encode($service->listCategories(), JSON_UNESCAPED_UNICODE);
    } elseif ($method === "POST") {
        $category = $service->addCategory($_POST["name"] ?? "");

        echo json_encode([
            "success" => true,
            "message" => "Category added successfully.",
            "category" => $category,
        ], JSON_UNESCAPED_UNICODE);
    } else {
        http_response_code(405);
        echo json_encode([
            "success" => false,
            "message" => "This request method is not supported.",
        ]);
    }
} catch (InvalidArgumentException $error) {
    http_response_code(400);
    echo json_encode([
        "success" => false,
        "message" => $error->getMessage(),
    ]);
} catch (Throwable $error) {
    error_log($error->__toString());
    http_response_code(500);
    echo json_encode([
        "success" => false,
        "message" => "The category request could not be completed.",
    ]);
}
