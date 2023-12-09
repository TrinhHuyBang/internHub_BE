<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('business')->insert([
            ["name" => "Công ty cổ phần chứng khoán VPS","industry" => "Kinh doanh/ Bán hàng","location" => "2A Đại Cồ Việt, Hai Bà Trưng, Hà Nội", "business_logo" => "", "country" => "Việt Nam","province" => "Hà Nội","employees_number" => 1200,"website" => "https://www.vps.com.vn/","contact_email" => "ckvps@gmail.com"],
            ["name" => "CÔNG TY TNHH CÔNG NGHỆ CAO VIỆT TRUNG","industry" => "Kinh doanh/ Bán hàng","location" => "Số B19 - 17 Khu B, KĐT mới Geleximco, Lê Trọng Tấn, Dương Nội, Hà Đông, Hà Nội", "business_logo" => "", "country" => "Việt Nam","province" => "Hồ Chí Minh","employees_number" => 100,"website" => "https://www.cambienviet.vn/","contact_email" => "viettrung@gmail.com"],
            ["name" => "FPT Information System","industry" => "IT/Phần mềm","location" => "Tầng 22 toà nhà Keangnam Landmark 72, E6 Phạm Hùng, Nam Từ Liêm, Hà Nội", "business_logo" => "", "country" => "Việt Nam","province" => "Hải Phòng","employees_number" => 5300,"website" => "https://www.fis.com.vn/","contact_email" => "contact@fpt.com"],
            ["name" => "Công ty Cổ phần Công nghệ Sen Đỏ","industry" => "Kinh doanh/ Bán hàng","location" => "Tầng 9, Tòa nhà Oriental, 324 Tây Sơn, Đống Đa, Hà Nội", "business_logo" => "", "country" => "Việt Nam","province" => "Đà Nẵng","employees_number" => 1000,"website" => "https://www.sendo.vn/","contact_email" => "sendo@gmail.com"],
            ["name" => "CÔNG TY CỔ PHẦN ĐẦU TƯ & THƯƠNG MẠI QUỐC TẾ TÂM VIỆT","industry" => "Kinh doanh/ Bán hàng","location" => "ngõ 22 Đường Mạc Thái Tổ, Yên Hòa, Cầu Giấy, Hà Nội", "business_logo" => "", "country" => "Việt Nam","province" => "Hà Nội","employees_number" => 1000,"website" => "https://duoctamviet.com.vn/","contact_email" => "tamviet@gmail.com"],
            ["name" => "CÔNG TY TNHH ALI LOGISTICS VIỆT NAM","industry" => "Kinh doanh/Bán hàng","location" => "168 TRUNG KINH,CẦU GIẤY, HÀ NỘI", "business_logo" => "", "country" => "Việt Nam","province" => "Hồ Chí Minh","employees_number" => 1000,"website" => "https://orderthangloi.com/","contact_email" => "thangloi@gmail.com"],
            ["name" => "Công ty Cổ phần Giáo dục & Đào tạo IMAP Việt Nam","industry" => "Hành chính/Văn phòng","location" => "14 Trần Kim Xuyến, Yên Hoà,  Cầu Giấy, Hà Nội", "business_logo" => "", "country" => "Việt Nam","province" => "Hải Phòng","employees_number" => 100,"website" => "https://imap.edu.vn/","contact_email" => "imapedu@gmail.com"],
            ["name" => "Công Ty TNHH Thiết Bị Khoa Học Việt Anh","industry" => "Kinh doanh/Bán hàng","location" => "Số 2 Lô 3A Khu đô thị Trung Yên, Trung Hoà, Cầu Giấy, Hà Nội", "business_logo" => "", "country" => "Việt Nam","province" => "Đà Nẵng","employees_number" => 100,"website" => "https://vietanhco.com.vn/","contact_email" => "vietanh@gmail.com"]
        ]);
    }
}
