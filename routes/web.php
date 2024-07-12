<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Models\Task;


// Basic Routing
Route::get('/greeting', function () {
    return 'Hello, World!';
});


// Required parameter routing
Route::get('/user/{id}', function ($id) {
    return 'User '.$id;
});


// Optional Parameters
Route::get('/user/{name?}', function ($name = 'John') {
    return 'User '.$name;
});


// Named Routes
Route::get('/user/profile', function () {
    // Your code here
})->name('profile');


Route::get('/', function () {
    $tasks = Task::all();
    return view('tasks.index', compact('tasks'));
});

// // Define your tasks resource route
Route::resource('tasks', TaskController::class);






















Route::get('tasks/{name}', function($name ="food") {
    return view('Task available'. $name);
});