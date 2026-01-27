<?php

use App\Models\Task;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function () {
    return view('index', [
        'tasks' => Task::all()
    ]);
})->name('tasks.index');

Route::get('/tasks/{id}', function ($id) {
    $task = Task::find($id);

    if (!$task) {
        abort(Response::HTTP_NOT_FOUND);
    }

    return view('show', ['task' => $task]);
})->name('tasks.show');

Route::fallback(function () {
    return 'Still got somewhere!';
});
