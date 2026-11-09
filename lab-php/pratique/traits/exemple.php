<?php

declare(strict_types=1);

trait HasTimestamps
{
    private DateTimeImmutable $createdAt;
    private DateTimeImmutable $updatedAt;

    public function initializeTimestamps(?DateTimeImmutable $time = null): void
    {
        $time ??= new DateTimeImmutable();
        $this->createdAt = $time;
        $this->updatedAt = $time;
    }

    public function createdAt(): DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function updatedAt(): DateTimeImmutable
    {
        return $this->updatedAt;
    }
}

final class Article
{
    use HasTimestamps;

    public function __construct(public readonly string $title)
    {
        $this->initializeTimestamps();
    }
}

final class Comment
{
    use HasTimestamps;

    public function __construct(public readonly string $text)
    {
        $this->initializeTimestamps();
    }
}

$article = new Article('Share behavior with a trait');
$comment = new Comment('A reusable example');

echo $article->title . ' - created at ' . $article->createdAt()->format('Y-m-d H:i:s') . PHP_EOL;
echo $comment->text . ' - created at ' . $comment->createdAt()->format('Y-m-d H:i:s') . PHP_EOL;