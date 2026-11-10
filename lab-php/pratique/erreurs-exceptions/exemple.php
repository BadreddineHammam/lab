<?php

declare(strict_types=1);

namespace LabPhp\Errors;

final class TaskException extends \InvalidArgumentException
{
}

final class TaskService
{
    public function create(string $title): string
    {
        $normalizedTitle = trim($title);

        if ($normalizedTitle === '') {
            throw new TaskException('Le titre de la tâche ne peut pas être vide.');
        }

        return 'Tâche créée : ' . $normalizedTitle;
    }
}

$taskService = new TaskService();

try {
    echo $taskService->create('Préparer la présentation PHP'), PHP_EOL;
    echo $taskService->create('   '), PHP_EOL;
} catch (TaskException $exception) {
    echo 'Erreur traitée : ' . $exception->getMessage(), PHP_EOL;
} finally {
    echo 'Fin de la démonstration.', PHP_EOL;
}
