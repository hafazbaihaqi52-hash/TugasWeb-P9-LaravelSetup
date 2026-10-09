# Tugas Web P9 - Laravel Setup

## Identitas

**Nama:** Muhammad Hafaz Baihaqi  
**Mata Kuliah:** Pemrograman Web  
**Framework:** Laravel 13  
**Database:** MySQL  

---

## Deskripsi

Project ini dibuat untuk memenuhi Tugas Web Pertemuan 9 mengenai setup dan penggunaan dasar Laravel.

Project mencakup pembuatan project Laravel, konfigurasi database MySQL, migration, routing, Blade View, Controller, Model, serta route dengan parameter.

---

## Teknologi yang Digunakan

- PHP 8.5.11
- Composer 2.10.3
- Laravel 13
- MySQL
- XAMPP
- phpMyAdmin
- Visual Studio Code

---

## Cara Menjalankan Project

Cara Menjalankan Project
1. Clone atau buka project

Project diletakkan pada folder:

C:\xampp0\htdocs\TugasWeb-P9-LaravelSetup

2. Install dependency

Jalankan:

composer install
3. Konfigurasi file environment

Buat file .env berdasarkan .env.example, kemudian sesuaikan konfigurasi database.

Contoh:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tugas_p9
DB_USERNAME=root
DB_PASSWORD=
4. Generate application key
php artisan key:generate
5. Jalankan migration
php artisan migrate
6. Jalankan server Laravel
php artisan serve

Kemudian buka:

http://127.0.0.1:8000

Route yang Digunakan
Halaman Utama
/

Menampilkan halaman utama Laravel dengan data yang diberikan dari route.

About
/about

Menampilkan halaman About menggunakan Blade View dan Controller.

Contact
/contact

Menampilkan halaman Contact menggunakan Blade View dan Controller.

Bonus Route
/hello/{nama}

Route parameter yang digunakan untuk menampilkan nama secara dinamis.

Contoh:

/hello/Hafaz
Database

Database yang digunakan:

tugas_p9

Salah satu migration yang dibuat adalah tabel products dengan struktur:

id
name
price
description
created_at
updated_at
Struktur Folder Utama
TugasWeb-P9-LaravelSetup/
│
├── app/
│   ├── Http/
│   │   └── Controllers/
│   └── Models/
│
├── bootstrap/
│
├── config/
│
├── database/
│   └── migrations/
│
├── public/
│
├── resources/
│   └── views/
│
├── routes/
│   └── web.php
│
├── storage/
│
├── tests/
│
├── .env
├── .env.example
├── artisan
├── composer.json
└── README.md
Konsep yang Dipelajari

Project ini menerapkan beberapa konsep dasar Laravel:

Routing
Blade View
Controller
Model
Migration
Konfigurasi database
Artisan
Route parameter
Struktur MVC
Repository

Repository GitHub:

TugasWeb-P9-LaravelSetup