<?php

namespace App\Classes;

use App\Traits\Logger;

class Project
{
    use Logger;

    public function create($name)
    {
        echo "Project created: " . $name . "<br>";

        $this->logActivity("Project created");
    }
}
?>