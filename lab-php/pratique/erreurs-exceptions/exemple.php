<?php

declare(strict_types=1);

function publishArticle(string $title): string
{
    $title = trim($title);

    if ($title === '') {
        throw new InvalidArgumentException('The title cannot be empty.');
    }

    return sprintf('Article published: %s', $title);
}

foreach (['Error handling in PHP', '   '] as $title) {
    try {
        echo publishArticle($title) . PHP_EOL;
    } catch (InvalidArgumentException $exception) {
        echo 'Publication rejected: ' . $exception->getMessage() . PHP_EOL;
    }
}