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
            ["username" => "Hoàng Xuân Bách","email" => "bach@gmail.com","password" => 123456789,"address" => "1 Đại Cồ Việt, Bách Khoa, Hai Bà Trưng,  Hà Nội","avatar" => "https://gravatar.com/avatar/0b3796730ce917520574747c843928a6?s=400&d=robohash&r=x", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["username" => "Trịnh Huy Bằng","email" => "bang@gmail.com","password" => 123456789,"address" => "1 Tạ Quang Bửu, Bách Khoa, Hai Bà Trưng, Hà Nội","avatar" => "https://robohash.org/15c65db2699582db735f79e8675ab659?set=set4&bgset=&size=400x400", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["username" => "Nguyễn Tiến","email" => "dat@gmail.com","password" => 123456789,"address" => "8 Phạm Văn Đồng, Mai Dịch, Cầu Giấy, Hà Nội","avatar" => "https://gravatar.com/avatar/15c65db2699582db735f79e8675ab659?s=400&d=robohash&r=x", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["username" => "Nguyễn Đạt","email" => "tien@gmail.com","password" => 123456789,"address" => "8 Phạm Văn Đồng, Mai Dịch, Cầu Giấy, Hà Nội","avatar" => "https://gravatar.com/avatar/15c65db2699582db735f79e8675ab659?s=400&d=robohash&r=x", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["username" => "Lê Ngoc Khoa","email" => "khoa@gmail.com","password" => 123456789,"address" => "8 Phạm Văn Đồng, Mai Dịch, Cầu Giấy, Hà Nội","avatar" => "https://gravatar.com/avatar/15c65db2699582db735f79e8675ab659?s=400&d=robohash&r=x", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["username" => "Lê Huy Hùng","email" => "hung@gmail.com","password" => 123456789,"address" => "8 Phạm Văn Đồng, Mai Dịch, Cầu Giấy, Hà Nội","avatar" => "https://gravatar.com/avatar/15c65db2699582db735f79e8675ab659?s=400&d=robohash&r=x", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["username" => "Phạm Huy Hoàng","email" => "hoang@gmail.com","password" => 123456789,"address" => "8 Phạm Văn Đồng, Mai Dịch, Cầu Giấy, Hà Nội","avatar" => "https://gravatar.com/avatar/15c65db2699582db735f79e8675ab659?s=400&d=robohash&r=x", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["username" => "Nguyễn Đình Tuấn Ngọc","email" => "ngoc@gmail.com","password" => 123456789,"address" => "8 Phạm Văn Đồng, Mai Dịch, Cầu Giấy, Hà Nội","avatar" => "https://gravatar.com/avatar/15c65db2699582db735f79e8675ab659?s=400&d=robohash&r=x", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["username" => "Ngô Bảo Sơn","email" => "son@gmail.com","password" => 123456789,"address" => "8 Phạm Văn Đồng, Mai Dịch, Cầu Giấy, Hà Nội","avatar" => "https://gravatar.com/avatar/15c65db2699582db735f79e8675ab659?s=400&d=robohash&r=x", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["username" => "Vũ Thiện phú","email" => "phu@gmail.com","password" => 123456789,"address" => "8 Phạm Văn Đồng, Mai Dịch, Cầu Giấy, Hà Nội","avatar" => "https://gravatar.com/avatar/15c65db2699582db735f79e8675ab659?s=400&d=robohash&r=x", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["username" => "Phan Thị Thu Trang","email" => "trang@gmail.com","password" => 123456789,"address" => "8 Phạm Văn Đồng, Mai Dịch, Cầu Giấy, Hà Nội","avatar" => "https://gravatar.com/avatar/15c65db2699582db735f79e8675ab659?s=400&d=robohash&r=x", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["username" => "Lưu Hiệp","email" => "hiep@gmail.com","password" => 123456789,"address" => "8 Phạm Văn Đồng, Mai Dịch, Cầu Giấy, Hà Nội","avatar" => "https://gravatar.com/avatar/15c65db2699582db735f79e8675ab659?s=400&d=robohash&r=x", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["username" => "Nhật Sang","email" => "sang@gmail.com","password" => 123456789,"address" => "8 Phạm Văn Đồng, Mai Dịch, Cầu Giấy, Hà Nội","avatar" => "https://gravatar.com/avatar/15c65db2699582db735f79e8675ab659?s=400&d=robohash&r=x", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["username" => "Văn An","email" => "an@gmail.com","password" => 123456789,"address" => "8 Phạm Văn Đồng, Mai Dịch, Cầu Giấy, Hà Nội","avatar" => "https://gravatar.com/avatar/15c65db2699582db735f79e8675ab659?s=400&d=robohash&r=x", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["username" => "Trần Hậu Đức Thắng","email" => "thang@gmail.com","password" => 123456789,"address" => "8 Phạm Văn Đồng, Mai Dịch, Cầu Giấy, Hà Nội","avatar" => "https://gravatar.com/avatar/15c65db2699582db735f79e8675ab659?s=400&d=robohash&r=x", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["username" => "Nguyễn Đức","email" => "duc@gmail.com","password" => 123456789,"address" => "8 Phạm Văn Đồng, Mai Dịch, Cầu Giấy, Hà Nội","avatar" => "https://gravatar.com/avatar/15c65db2699582db735f79e8675ab659?s=400&d=robohash&r=x", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["username" => "Huy Bằng","email" => "huy@gmail.com","password" => 123456789,"address" => "8 Phạm Văn Đồng, Mai Dịch, Cầu Giấy, Hà Nội","avatar" => "https://gravatar.com/avatar/15c65db2699582db735f79e8675ab659?s=400&d=robohash&r=x", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["username" => "Trịnh Bằng","email" => "trinh@gmail.com","password" => 123456789,"address" => "8 Phạm Văn Đồng, Mai Dịch, Cầu Giấy, Hà Nội","avatar" => "https://gravatar.com/avatar/15c65db2699582db735f79e8675ab659?s=400&d=robohash&r=x", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["username" => "Nguyễn Thu Hà","email" => "ha@gmail.com","password" => 123456789,"address" => "8 Phạm Văn Đồng, Mai Dịch, Cầu Giấy, Hà Nội","avatar" => "https://gravatar.com/avatar/15c65db2699582db735f79e8675ab659?s=400&d=robohash&r=x", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
            ["username" => "Anh Nguyễn","email" => "anh@gmail.com","password" => 123456789,"address" => "8 Phạm Văn Đồng, Mai Dịch, Cầu Giấy, Hà Nội","avatar" => "https://gravatar.com/avatar/15c65db2699582db735f79e8675ab659?s=400&d=robohash&r=x", "created_at" => Carbon::now()->subHours(rand(1, 1800)), "updated_at" => Carbon::now()->subHours(rand(1, 1800))],
        ]);
    }
}
