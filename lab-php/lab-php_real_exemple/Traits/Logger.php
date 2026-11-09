<?php

namespace App\Traits;

trait Logger
{
    public function logActivity($message)
    {
        echo "Activity: " . $message . "<br>";
    }
}