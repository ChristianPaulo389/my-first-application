<?php

use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', function () {
    return view('home');
});

use App\Models\Job;

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            ['id' => 1, 'title' => 'Director', 'salary' => '$50,000'],
            ['id' => 2, 'title' => 'Programmer', 'salary' => '$10,000'],
            ['id' => 3, 'title' => 'Teacher', 'salary' => '$40,000'],
        ]
    ]);
});


Route::get('/jobs/{id}', function ($id) {
    return view('job', ['job' => Job::find($id)]);
});

