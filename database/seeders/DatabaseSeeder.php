<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
{
    // Create 5 employers
    $employers = \App\Models\Employer::factory(5)->create();

    // Create 10 tags
    $tags = \App\Models\Tag::factory(10)->create();

    // Create 20 jobs, each linked to a random employer
    \App\Models\Job::factory(20)->make()->each(function ($job) use ($employers, $tags) {
        $job->employer_id = $employers->random()->id; // ✅ assign valid employer
        $job->save();

        // Attach 2 random tags
        $job->tags()->attach($tags->random(2));
    });
}

}
