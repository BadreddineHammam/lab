<?php

namespace App\Classes;

use App\Traits\Logger;
use App\Exceptions\TaskException;

class Task
{
    use Logger;

    public function create($title)
    {
        if (empty($title)) 
        {
            throw new TaskException("Task title cannot be empty!");
        }

        echo "Task created: " . $title . "<br>";

        $this->logActivity("Task created");
    }
}
?>