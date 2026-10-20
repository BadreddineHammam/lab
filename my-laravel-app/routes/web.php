<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/users', function () {
    $users = DB::table('users')->get();
    
    $html = '<h1>My MySQL Users</h1><ul>';
    foreach($users as $user) {
        $html .= '<li>Name: ' . $user->name . ' - Email: ' . $user->email . '</li>';
    }
    $html .= '</ul>';
    
    return $html;
});