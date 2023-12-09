<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ["username" => "Hoàng Xuân Bách","email" => "bach@gmail.com","password" => 123456789,"address" => "1 Đại Cồ Việt, Bách Khoa, Hai Bà Trưng,  Hà Nội","avatar" => "https://gravatar.com/avatar/0b3796730ce917520574747c843928a6?s=400&d=robohash&r=x", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["username" => "Trịnh Huy Bằng","email" => "bang@gmail.com","password" => 123456789,"address" => "1 Tạ Quang Bửu, Bách Khoa, Hai Bà Trưng, Hà Nội","avatar" => "https://robohash.org/15c65db2699582db735f79e8675ab659?set=set4&bgset=&size=400x400", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["username" => "Nguyễn Tiến Đạt","email" => "dat@gmail.com","password" => 123456789,"address" => "8 Phạm Văn Đồng, Mai Dịch, Cầu Giấy, Hà Nội","avatar" => "https://gravatar.com/avatar/15c65db2699582db735f79e8675ab659?s=400&d=robohash&r=x", "created_at" => Carbon::now(), "updated_at" => Carbon::now()]
        ]);
    }
}
