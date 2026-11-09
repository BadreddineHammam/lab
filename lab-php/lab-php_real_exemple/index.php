<?php

require_once "Exceptions/TaskException.php";
require_once "Traits/Logger.php";
require_once "Classes/Task.php";
require_once "Classes/Project.php";

use App\Classes\Task;
use App\Classes\Project;

$task = new Task();
$project = new Project();

try {

    $task->create("Learn PHP");

    $project->create("My First Website");

    // Test an invalid task
    $task->create("");

} catch (App\Exceptions\TaskException $e) {

    echo "Error: " . $e->getMessage();

} finally {

    echo "<br>Program finished.";

}
?>