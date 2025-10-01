<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

// Jobs index
Route::get('/jobs', function () {
    return view('jobs.index', [
        'jobs' => Job::with('employer')->paginate(10)
    ]);
});

// Show single job
Route::get('/jobs/{job}', function (Job $job) {
    return view('jobs.show', ['job' => $job]);
});

// Show create form (must be before show route)
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// Store new job
Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1, // hardcoded for now
    ]);

    return redirect('/jobs');
});

// Show edit form
Route::get('/jobs/{job}/edit', function (Job $job) {
    return view('jobs.edit', ['job' => $job]);
});

// Update job
Route::patch('/jobs/{job}', function (Job $job) {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    return redirect('/jobs/' . $job->id);
});

// Delete job
Route::delete('/jobs/{job}', function (Job $job) {
    $job->delete();
    return redirect('/jobs');
});
