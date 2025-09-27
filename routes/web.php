<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => \App\Models\Job::with('employer')->paginate(10)
    ]);
});




Route::get('/jobs/{id}', function ($id) {
    return view('job', ['job' => Job::find($id)]);
});

// Jobs index
Route::get('/jobs', function () {
    return view('jobs.index', [
        'jobs' => \App\Models\Job::with('employer')->paginate(10)
    ]);
});

// Single job (Route Model Binding)
Route::get('/jobs/{job}', function (\App\Models\Job $job) {
    return view('jobs.show', ['job' => $job]);
});

// Show Create Form
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{job}/edit', function (\App\Models\Job $job) {

    return view('jobs.edit', ['job' => $job]);
});

// Store a New Job
Route::patch('/jobs/{job}', function (\App\Models\Job $job) {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);

    return redirect('/jobs/' . $job->id);
});

// Delete Job
Route::delete('/jobs/{job}', function (\App\Models\Job $job) {
    $job->delete();
    return redirect('/jobs');
});
