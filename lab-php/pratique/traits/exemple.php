<?php

declare(strict_types=1);

namespace LabPhp\Tasks;

trait ActivityLogger
{
    public function logActivity(string $message): void
    {
        echo 'Activité : ' . $message, PHP_EOL;
    }
}

final class Task
{
    use ActivityLogger;

    public function create(string $title): void
    {
        echo 'Tâche créée : ' . $title, PHP_EOL;
        $this->logActivity('création de tâche');
    }
}

final class Project
{
    use ActivityLogger;

    public function create(string $name): void
    {
        echo 'Projet créé : ' . $name, PHP_EOL;
        $this->logActivity('création de projet');
    }
}

$task = new Task();
$project = new Project();

$task->create('Tester le lab');
$project->create('Gestion des tâches');
