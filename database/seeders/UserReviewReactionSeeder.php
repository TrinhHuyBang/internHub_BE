<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserReviewReactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_review_reactions')->insert([
            ["user_id" => 16,"review_id" => 21,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 15,"review_id" => 1,"reaction_type" => "dislike", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 10,"review_id" => 3,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 3,"review_id" => 11,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 19,"review_id" => 34,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 16,"review_id" => 3,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 17,"review_id" => 1,"reaction_type" => "dislike", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 4,"review_id" => 15,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 8,"review_id" => 42,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 18,"review_id" => 39,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 17,"review_id" => 38,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 15,"review_id" => 11,"reaction_type" => "dislike", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 18,"review_id" => 34,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 15,"review_id" => 33,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 16,"review_id" => 34,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 10,"review_id" => 13,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 8,"review_id" => 3,"reaction_type" => "dislike", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 14,"review_id" => 5,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 7,"review_id" => 16,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 8,"review_id" => 40,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 5,"review_id" => 19,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 4,"review_id" => 31,"reaction_type" => "dislike", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 18,"review_id" => 10,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 12,"review_id" => 31,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 19,"review_id" => 17,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 16,"review_id" => 32,"reaction_type" => "dislike", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 9,"review_id" => 39,"reaction_type" => "dislike", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 16,"review_id" => 10,"reaction_type" => "dislike", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 12,"review_id" => 39,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 10,"review_id" => 7,"reaction_type" => "dislike", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 14,"review_id" => 4,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 17,"review_id" => 24,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 7,"review_id" => 39,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 10,"review_id" => 18,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 8,"review_id" => 32,"reaction_type" => "dislike", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 11,"review_id" => 19,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 2,"review_id" => 40,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 5,"review_id" => 19,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 15,"review_id" => 6,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 1,"review_id" => 24,"reaction_type" => "dislike", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 5,"review_id" => 28,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 6,"review_id" => 27,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 1,"review_id" => 37,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 9,"review_id" => 18,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 1,"review_id" => 14,"reaction_type" => "dislike", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 7,"review_id" => 10,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 15,"review_id" => 36,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 13,"review_id" => 12,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 1,"review_id" => 24,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 13,"review_id" => 12,"reaction_type" => "dislike", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 1,"review_id" => 28,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 1,"review_id" => 34,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 19,"review_id" => 14,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 9,"review_id" => 15,"reaction_type" => "dislike", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 13,"review_id" => 35,"reaction_type" => "dislike", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 15,"review_id" => 19,"reaction_type" => "dislike", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 20,"review_id" => 32,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 19,"review_id" => 33,"reaction_type" => "dislike", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 12,"review_id" => 12,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 12,"review_id" => 30,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 7,"review_id" => 28,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 11,"review_id" => 21,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 20,"review_id" => 19,"reaction_type" => "dislike", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 3,"review_id" => 16,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 17,"review_id" => 39,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 8,"review_id" => 30,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 15,"review_id" => 9,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 12,"review_id" => 12,"reaction_type" => "dislike", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 8,"review_id" => 34,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 10,"review_id" => 42,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 2,"review_id" => 35,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 12,"review_id" => 38,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 12,"review_id" => 16,"reaction_type" => "dislike", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 13,"review_id" => 34,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 3,"review_id" => 30,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 11,"review_id" => 28,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 18,"review_id" => 25,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 14,"review_id" => 39,"reaction_type" => "dislike", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 19,"review_id" => 15,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 7,"review_id" => 27,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 6,"review_id" => 8,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 4,"review_id" => 20,"reaction_type" => "dislike", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 13,"review_id" => 26,"reaction_type" => "dislike", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 7,"review_id" => 22,"reaction_type" => "dislike", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 9,"review_id" => 1,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 6,"review_id" => 22,"reaction_type" => "dislike", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 8,"review_id" => 22,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 4,"review_id" => 22,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 20,"review_id" => 19,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 4,"review_id" => 38,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 13,"review_id" => 25,"reaction_type" => "dislike", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 20,"review_id" => 2,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 18,"review_id" => 9,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 18,"review_id" => 40,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 9,"review_id" => 15,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 5,"review_id" => 6,"reaction_type" => "dislike", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 6,"review_id" => 19,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 3,"review_id" => 41,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 14,"review_id" => 40,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 20,"review_id" => 3,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 10,"review_id" => 31,"reaction_type" => "dislike", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 16,"review_id" => 10,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 20,"review_id" => 39,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 19,"review_id" => 3,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 7,"review_id" => 21,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 18,"review_id" => 4,"reaction_type" => "dislike", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 18,"review_id" => 35,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 15,"review_id" => 37,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 10,"review_id" => 29,"reaction_type" => "like", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 7,"review_id" => 21,"reaction_type" => "dislike", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 5,"review_id" => 4,"reaction_type" => "dislike", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["user_id" => 17,"review_id" => 26,"reaction_type" => "dislike", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))]
        ]);
    }
}
