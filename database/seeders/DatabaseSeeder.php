<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
{
    // Example default user
    \App\Models\User::factory()->create([
        'first_name' => 'John',
        'last_name'  => 'Doe',
        'email'      => 'test@example.com',
    ]);

    // Create tags
    $tags = \App\Models\Tag::factory(10)->create();

    // Create jobs and attach random tags
    \App\Models\Job::factory(20)->create()->each(function($job) use ($tags) {
        $job->tags()->attach($tags->random(2));
    });
}

}
