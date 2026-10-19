KREZZO - UTS REKAYASA WEB (Tema 9: Katalog Makanan Kering, tabel snacks)
Laravel 13 | Blade Template | Bootstrap (lokal di public/Bootstrap) | MySQL

CARA MENJALANKAN
1. Pastikan PHP 8.3+, Composer, dan MySQL (Laragon/XAMPP) sudah aktif.
2. Buat database MySQL bernama: db_uts_nim
   (kalau nama/akses database beda, sesuaikan DB_DATABASE, DB_USERNAME, DB_PASSWORD di file .env)
3. Buka terminal di folder proyek ini, lalu jalankan:
      composer install
      php artisan migrate --seed
      php artisan serve
4. Buka http://127.0.0.1:8000

HALAMAN
   /              Home
   /about         About
   /produk        Katalog Produk (pagination, 8 produk per halaman)
   /produk/{id}   Detail Produk
   /contact       Contact Us

FILE PENTING
   database/migrations/2026_10_18_000000_create_snacks_table.php
   database/seeders/SnackSeeder.php        (10 produk dummy)
   app/Models/Snack.php
   app/Http/Controllers/PageController.php, SnackController.php
   routes/web.php
   resources/views/layouts/app.blade.php   (layout utama)
   resources/views/partials/               (navbar, footer, kartu produk)
   resources/views/products/               (daftar + detail produk)
   resources/views/vendor/pagination/krezzo.blade.php
   public/assets/css/krezzo.css
   public/assets/images/                   (logo.png, hero.png, about.png, foto produk)
   public/Bootstrap/                       (Bootstrap lokal)

YANG PERLU DIGANTI
   Logo header + footer : public/assets/images/logo.png
   Foto produk          : public/assets/images/ (nama file ada di SnackSeeder.php)
   Foto hero/about      : public/assets/images/hero.png dan about.png
   Gambar bawaan hanya placeholder.
