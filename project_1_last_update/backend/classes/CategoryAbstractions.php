<?php

// An interface lists the methods every category must have.
interface CategoryInterface
{
    public function getId(): int;

    public function getName(): string;
}

// An abstract class shares code with category classes.
abstract class AbstractCategory implements CategoryInterface
{
    protected int $id;
    protected string $name;

    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    // Each real category must provide its own details.
    abstract public function getDetails(): string;
}
