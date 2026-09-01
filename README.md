# App Perpustakaan

Aplikasi manajemen perpustakaan berbasis web yang dibangun menggunakan **Laravel 12**.

---

## 🎯 Tujuan Aplikasi
Aplikasi ini dirancang untuk mempermudah pengelolaan data dan operasional perpustakaan secara efisien, meliputi:
- **Manajemen Buku:** Pencatatan katalog buku, kategori, dan pemantauan ketersediaan stok buku.
- **Manajemen Anggota:** Pengelolaan data keanggotaan dan pengguna sistem.
- **Sirkulasi Perpustakaan:** Pencatatan transaksi peminjaman dan pengembalian buku secara terpusat.

---

## 🚀 Cara Menjalankan Project Secara Lokal

### 1. Sistem yang harus ada!
Pastikan perangkat Anda telah terpasang:
- PHP (>= 8.2)
- Composer
- MySQL (via XAMPP)
- Git

### 2. Langkah Instalasi & Konfigurasi
Buka terminal di folder project, lalu jalankan perintah berikut secara berurutan:

```bash
# Clone repository (jika baru mengunduh dari GitHub)
git clone [https://github.com/dclsth/app-perpustakaan.git](https://github.com/dclsth/app-perpustakaan.git)
cd app-perpustakaan

# Install dependensi project
composer install

# Buat salinan file environment
cp .env.example .env

# Generate application key
php artisan key:generate

```

### 3. Konfigurasi Database

- Buka pgAdmin atau terminal PostgreSQL, lalu buat database baru bernama: app-perpustakaan

- Buka file .env di VS Code, lalu sesuaikan konfigurasi koneksi PostgreSQL berikut:
```bash
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=app_perpustakaan
DB_USERNAME=postgres
DB_PASSWORD=password_postgres_kamu
```

```bash

# Jalankan migrasi tabel ke database:
php artisan migrate

# Jalankan development server Laravel:
php artisan serve

```

- Akses aplikasi melalui browser di:
[http://127.0.0.1:8000](http://127.0.0.1:8000)

## Selamat Mencoba! ##


