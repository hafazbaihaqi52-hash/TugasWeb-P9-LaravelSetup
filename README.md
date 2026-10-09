# Tugas Web P9 - Laravel Setup

## Identitas

| | |
|---|---|
| **Nama** | Muhammad Hafaz Baihaqi |
| **Mata Kuliah** | Pemrograman Web |
| **Framework** | Laravel 13 |
| **Database** | MySQL |

---

## Deskripsi

Project ini dibuat untuk memenuhi Tugas Web Pertemuan 9 mengenai setup dan penggunaan dasar Laravel.

Cakupan project:

- Pembuatan project Laravel
- Konfigurasi database MySQL
- Migration
- Routing
- Blade View
- Controller
- Model
- Route dengan parameter

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

### 1. Clone atau buka project

Letakkan project pada folder:

```
C:\xampp0\htdocs\TugasWeb-P9-LaravelSetup
```

### 2. Install dependency

```bash
composer install
```

### 3. Konfigurasi file environment

Buat file `.env` berdasarkan `.env.example`, lalu sesuaikan konfigurasi database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tugas_p9
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Generate application key

```bash
php artisan key:generate
```

### 5. Jalankan migration

```bash
php artisan migrate
```

### 6. Jalankan server Laravel

```bash
php artisan serve
```

Kemudian buka di browser: <http://127.0.0.1:8000>

---

## Route yang Digunakan

| Route | Keterangan |
|---|---|
| `/` | Halaman utama Laravel dengan data yang diberikan dari route |
| `/about` | Halaman About menggunakan Blade View dan Controller |
| `/contact` | Halaman Contact menggunakan Blade View dan Controller |
| `/hello/{nama}` | **Bonus:** route parameter untuk menampilkan nama secara dinamis |

Contoh: `/hello/Hafaz`

---

## Database

Nama database: `tugas_p9`

Salah satu migration yang dibuat adalah tabel `products` dengan struktur:

| Kolom | Keterangan |
|---|---|
| `id` | Primary key |
| `name` | Nama produk |
| `price` | Harga produk |
| `description` | Deskripsi produk |
| `created_at` | Waktu dibuat |
| `updated_at` | Waktu diperbarui |

---

## Struktur Folder Utama

```
TugasWeb-P9-LaravelSetup/
│
├── app/
│   ├── Http/
│   │   └── Controllers/
│   └── Models/
│
├── bootstrap/
├── config/
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
├── tests/
│
├── .env
├── .env.example
├── artisan
├── composer.json
└── README.md
```

---

## Konsep yang Dipelajari

- Routing
- Blade View
- Controller
- Model
- Migration
- Konfigurasi database
- Artisan
- Route parameter
- Struktur MVC

---

## Repository

GitHub: **TugasWeb-P9-LaravelSetup**
