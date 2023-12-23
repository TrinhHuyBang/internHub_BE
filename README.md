## Cài đặt môi trường : Project sử dụng phiên bản Laravel 9 nên khuyến nghị dùng với PHP 8.

## Chạy project
- #### B1: Cài Đặt Composer Dependencies:
  composer install
- #### B2: Tạo File .env:
  cp .env.example .env
- #### B3: Tạo Key Ứng Dụng:
  php artisan key:generate
- #### B4: Chạy Migration để tạo DB:
  - Trước khi chạy cập nhật trong .env các trường thông tin về database cho phù hợp
    - DB_CONNECTION=mysql
    - DB_HOST=127.0.0.1
    - DB_PORT=3306
    - DB_DATABASE=laravel
    - DB_USERNAME=root
    - DB_PASSWORD=
  - Xong thì chạy
    - php artisan migrate
- #### B5: Chạy Seeder để seed dữ liệu mẫu (dữ liệu đã đủ cho tất cả các bảng):
  php artisan db:seed
- #### B6: Chạy project:
  php artisan serve
