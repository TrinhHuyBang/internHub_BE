<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(BusinessSeeder::class);
        $this->call(JobPostingSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(UserReviewReactionSeeder::class);
        $this->call(ReviewChecklistRatingSeeder::class);
        $this->call(ReviewCommentSeeder::class);
    }
}
