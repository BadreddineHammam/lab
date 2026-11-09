<?php

declare(strict_types=1);

require __DIR__ . '/app/Models/Article.php';
require __DIR__ . '/app/Repositories/ArticleRepository.php';

use App\Repositories\ArticleRepository;

$repository = new ArticleRepository();
$article = $repository->find(1);

if ($article === null) {
    echo "Article not found." . PHP_EOL;
    exit(0);
}

echo $article->title . PHP_EOL;