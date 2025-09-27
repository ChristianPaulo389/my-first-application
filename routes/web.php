<?php

use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', function () {
    return view('home');
});

use App\Models\Job;

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => \App\Models\Job::with('employer')->paginate(10)
    ]);
});




Route::get('/jobs/{id}', function ($id) {
    return view('job', ['job' => Job::find($id)]);
});


