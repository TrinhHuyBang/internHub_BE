<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewChecklistRatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('review_checklist_ratings')->insert([
            ["review_id" => 1,"criteria_name" => "Lương/ quyền lợi","rating" => 1, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 2,"criteria_name" => "Lương/ quyền lợi","rating" => 5, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 3,"criteria_name" => "Lương/ quyền lợi","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 4,"criteria_name" => "Lương/ quyền lợi","rating" => 5, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 5,"criteria_name" => "Lương/ quyền lợi","rating" => 1, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 6,"criteria_name" => "Lương/ quyền lợi","rating" => 5, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 7,"criteria_name" => "Lương/ quyền lợi","rating" => 1, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 8,"criteria_name" => "Lương/ quyền lợi","rating" => 1, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 9,"criteria_name" => "Lương/ quyền lợi","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 10,"criteria_name" => "Lương/ quyền lợi","rating" => 5, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 11,"criteria_name" => "Lương/ quyền lợi","rating" => 4, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 12,"criteria_name" => "Lương/ quyền lợi","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 13,"criteria_name" => "Lương/ quyền lợi","rating" => 5, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 14,"criteria_name" => "Lương/ quyền lợi","rating" => 4, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 15,"criteria_name" => "Lương/ quyền lợi","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 16,"criteria_name" => "Lương/ quyền lợi","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 17,"criteria_name" => "Lương/ quyền lợi","rating" => 5, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 18,"criteria_name" => "Lương/ quyền lợi","rating" => 5, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 19,"criteria_name" => "Lương/ quyền lợi","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 20,"criteria_name" => "Lương/ quyền lợi","rating" => 5, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 21,"criteria_name" => "Lương/ quyền lợi","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 22,"criteria_name" => "Lương/ quyền lợi","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 23,"criteria_name" => "Lương/ quyền lợi","rating" => 4, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 24,"criteria_name" => "Lương/ quyền lợi","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 25,"criteria_name" => "Lương/ quyền lợi","rating" => 4, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 26,"criteria_name" => "Lương/ quyền lợi","rating" => 4, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 27,"criteria_name" => "Lương/ quyền lợi","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 28,"criteria_name" => "Lương/ quyền lợi","rating" => 4, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 29,"criteria_name" => "Lương/ quyền lợi","rating" => 1, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 30,"criteria_name" => "Lương/ quyền lợi","rating" => 4, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 31,"criteria_name" => "Lương/ quyền lợi","rating" => 1, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 32,"criteria_name" => "Lương/ quyền lợi","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 33,"criteria_name" => "Lương/ quyền lợi","rating" => 5, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 34,"criteria_name" => "Lương/ quyền lợi","rating" => 4, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 35,"criteria_name" => "Lương/ quyền lợi","rating" => 1, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 36,"criteria_name" => "Lương/ quyền lợi","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 37,"criteria_name" => "Lương/ quyền lợi","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 38,"criteria_name" => "Lương/ quyền lợi","rating" => 4, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 39,"criteria_name" => "Lương/ quyền lợi","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 40,"criteria_name" => "Lương/ quyền lợi","rating" => 1, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 41,"criteria_name" => "Lương/ quyền lợi","rating" => 5, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 42,"criteria_name" => "Lương/ quyền lợi","rating" => 1, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 1,"criteria_name" => "Văn phòng làm việc","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 2,"criteria_name" => "Văn phòng làm việc","rating" => 1, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 3,"criteria_name" => "Văn phòng làm việc","rating" => 5, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 4,"criteria_name" => "Văn phòng làm việc","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 5,"criteria_name" => "Văn phòng làm việc","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 6,"criteria_name" => "Văn phòng làm việc","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 7,"criteria_name" => "Văn phòng làm việc","rating" => 5, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 8,"criteria_name" => "Văn phòng làm việc","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 9,"criteria_name" => "Văn phòng làm việc","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 10,"criteria_name" => "Văn phòng làm việc","rating" => 5, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 11,"criteria_name" => "Văn phòng làm việc","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 12,"criteria_name" => "Văn phòng làm việc","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 13,"criteria_name" => "Văn phòng làm việc","rating" => 5, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 14,"criteria_name" => "Văn phòng làm việc","rating" => 1, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 15,"criteria_name" => "Văn phòng làm việc","rating" => 1, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 16,"criteria_name" => "Văn phòng làm việc","rating" => 1, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 17,"criteria_name" => "Văn phòng làm việc","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 18,"criteria_name" => "Văn phòng làm việc","rating" => 4, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 19,"criteria_name" => "Văn phòng làm việc","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 20,"criteria_name" => "Văn phòng làm việc","rating" => 4, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 21,"criteria_name" => "Văn phòng làm việc","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 22,"criteria_name" => "Văn phòng làm việc","rating" => 4, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 23,"criteria_name" => "Văn phòng làm việc","rating" => 1, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 24,"criteria_name" => "Văn phòng làm việc","rating" => 4, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 25,"criteria_name" => "Văn phòng làm việc","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 26,"criteria_name" => "Văn phòng làm việc","rating" => 5, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 27,"criteria_name" => "Văn phòng làm việc","rating" => 1, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 28,"criteria_name" => "Văn phòng làm việc","rating" => 1, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 29,"criteria_name" => "Văn phòng làm việc","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 30,"criteria_name" => "Văn phòng làm việc","rating" => 4, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 31,"criteria_name" => "Văn phòng làm việc","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 32,"criteria_name" => "Văn phòng làm việc","rating" => 5, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 33,"criteria_name" => "Văn phòng làm việc","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 34,"criteria_name" => "Văn phòng làm việc","rating" => 5, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 35,"criteria_name" => "Văn phòng làm việc","rating" => 1, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 36,"criteria_name" => "Văn phòng làm việc","rating" => 1, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 37,"criteria_name" => "Văn phòng làm việc","rating" => 5, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 38,"criteria_name" => "Văn phòng làm việc","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 39,"criteria_name" => "Văn phòng làm việc","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 40,"criteria_name" => "Văn phòng làm việc","rating" => 5, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 41,"criteria_name" => "Văn phòng làm việc","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 42,"criteria_name" => "Văn phòng làm việc","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 1,"criteria_name" => "Quản lý","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 2,"criteria_name" => "Quản lý","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 3,"criteria_name" => "Quản lý","rating" => 5, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 4,"criteria_name" => "Quản lý","rating" => 4, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 5,"criteria_name" => "Quản lý","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 6,"criteria_name" => "Quản lý","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 7,"criteria_name" => "Quản lý","rating" => 4, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 8,"criteria_name" => "Quản lý","rating" => 1, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 9,"criteria_name" => "Quản lý","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 10,"criteria_name" => "Quản lý","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 11,"criteria_name" => "Quản lý","rating" => 5, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 12,"criteria_name" => "Quản lý","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 13,"criteria_name" => "Quản lý","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 14,"criteria_name" => "Quản lý","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 15,"criteria_name" => "Quản lý","rating" => 5, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 16,"criteria_name" => "Quản lý","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 17,"criteria_name" => "Quản lý","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 18,"criteria_name" => "Quản lý","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 19,"criteria_name" => "Quản lý","rating" => 1, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 20,"criteria_name" => "Quản lý","rating" => 5, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 21,"criteria_name" => "Quản lý","rating" => 4, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 22,"criteria_name" => "Quản lý","rating" => 5, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 23,"criteria_name" => "Quản lý","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 24,"criteria_name" => "Quản lý","rating" => 1, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 25,"criteria_name" => "Quản lý","rating" => 5, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 26,"criteria_name" => "Quản lý","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 27,"criteria_name" => "Quản lý","rating" => 4, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 28,"criteria_name" => "Quản lý","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 29,"criteria_name" => "Quản lý","rating" => 5, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 30,"criteria_name" => "Quản lý","rating" => 1, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 31,"criteria_name" => "Quản lý","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 32,"criteria_name" => "Quản lý","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 33,"criteria_name" => "Quản lý","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 34,"criteria_name" => "Quản lý","rating" => 5, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 35,"criteria_name" => "Quản lý","rating" => 4, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 36,"criteria_name" => "Quản lý","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 37,"criteria_name" => "Quản lý","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 38,"criteria_name" => "Quản lý","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 39,"criteria_name" => "Quản lý","rating" => 1, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 40,"criteria_name" => "Quản lý","rating" => 4, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 41,"criteria_name" => "Quản lý","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 42,"criteria_name" => "Quản lý","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 1,"criteria_name" => "Đào tạo","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 2,"criteria_name" => "Đào tạo","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 3,"criteria_name" => "Đào tạo","rating" => 1, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 4,"criteria_name" => "Đào tạo","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 5,"criteria_name" => "Đào tạo","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 6,"criteria_name" => "Đào tạo","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 7,"criteria_name" => "Đào tạo","rating" => 4, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 8,"criteria_name" => "Đào tạo","rating" => 1, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 9,"criteria_name" => "Đào tạo","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 10,"criteria_name" => "Đào tạo","rating" => 4, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 11,"criteria_name" => "Đào tạo","rating" => 5, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 12,"criteria_name" => "Đào tạo","rating" => 1, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 13,"criteria_name" => "Đào tạo","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 14,"criteria_name" => "Đào tạo","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 15,"criteria_name" => "Đào tạo","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 16,"criteria_name" => "Đào tạo","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 17,"criteria_name" => "Đào tạo","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 18,"criteria_name" => "Đào tạo","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 19,"criteria_name" => "Đào tạo","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 20,"criteria_name" => "Đào tạo","rating" => 1, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 21,"criteria_name" => "Đào tạo","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 22,"criteria_name" => "Đào tạo","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 23,"criteria_name" => "Đào tạo","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 24,"criteria_name" => "Đào tạo","rating" => 4, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 25,"criteria_name" => "Đào tạo","rating" => 5, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 26,"criteria_name" => "Đào tạo","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 27,"criteria_name" => "Đào tạo","rating" => 4, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 28,"criteria_name" => "Đào tạo","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 29,"criteria_name" => "Đào tạo","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 30,"criteria_name" => "Đào tạo","rating" => 5, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 31,"criteria_name" => "Đào tạo","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 32,"criteria_name" => "Đào tạo","rating" => 1, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 33,"criteria_name" => "Đào tạo","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 34,"criteria_name" => "Đào tạo","rating" => 2, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 35,"criteria_name" => "Đào tạo","rating" => 5, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 36,"criteria_name" => "Đào tạo","rating" => 4, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 37,"criteria_name" => "Đào tạo","rating" => 1, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 38,"criteria_name" => "Đào tạo","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 39,"criteria_name" => "Đào tạo","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 40,"criteria_name" => "Đào tạo","rating" => 5, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 41,"criteria_name" => "Đào tạo","rating" => 5, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["review_id" => 42,"criteria_name" => "Đào tạo","rating" => 3, "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))]
        ]);
    }
}
