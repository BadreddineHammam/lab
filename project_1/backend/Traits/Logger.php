<?php
declare(strict_types=1);

namespace App\Backend\Traits;

// This trait lets category classes write simple activity notes to the PHP error log.
trait Logger
{
    protected function logActivity(string $message): void
    {
        error_log("[project_1] " . $message);
    }
}
