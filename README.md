# E-Commerce Application

Aplikasi E-Commerce sederhana yang dibangun menggunakan Laravel dengan fitur manajemen produk dan kategori.

## Tentang Aplikasi

Sistem manajemen e-commerce dengan fitur CRUD lengkap untuk produk dan kategori, dilengkapi autentikasi menggunakan Laravel Breeze.

## Fitur Utama

-   Autentikasi pengguna (Login, Register, Logout)
-   Manajemen kategori produk
-   Manajemen produk
-   Relasi produk dengan kategori
-   Dashboard pengguna
-   Proteksi route dengan middleware auth

## Teknologi

-   Laravel 11.x
-   Laravel Breeze
-   MySQL
-   Blade Templates
-   Tailwind CSS

## Cara Instalasi

### 1. Clone atau Download Project

```bash
# Jika menggunakan Git
git clone https://github.com/Rezkydesyafa/praktikum-PFS-Laravel.git
cd ecommercee

# Atau extract file ZIP ke folder c:\laragon\www\ecommercee
```

### 2. Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install
```

### 3. Konfigurasi Environment

```bash
# Copy file .env.example menjadi .env
copy .env.example .env

# Generate application key
php artisan key:generate
```

### 4. Konfigurasi Database

Buka file `.env` dan sesuaikan konfigurasi database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ecommerce
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Buat Database

Buat database baru dengan nama `ecommerce` atau yang sudah ada

```sql
CREATE DATABASE ecommerce_db;
```

### 6. Jalankan Migration

```bash
php artisan migrate
```

### 7. Compile Assets

```bash
# Development mode
npm run dev

# Atau untuk production
npm run build
```

### 8. Jalankan Server

```bash
# Jalankan Laravel development server
php artisan serve
```

Aplikasi akan berjalan di: `http://localhost:8000`

## Cara Penggunaan

### Akses Pertama Kali

1. Register akun baru di `http://localhost:8000/register`
2. Login dengan akun yang telah dibuat
3. Akses dashboard untuk mengelola produk dan kategori

### Mengelola Data

**Kategori:**

-   Lihat: Menu "Categories" di navigation bar
-   Tambah: Klik "Create New Category"
-   Edit/Hapus: Gunakan tombol pada setiap kategori

**Produk:**

-   Lihat: Menu "Products" atau root URL `/`
-   Tambah: Klik "Create New Product"
-   Edit/Hapus: Gunakan tombol pada setiap produk

## Troubleshooting

**Error "No application encryption key has been specified"**

-   Jalankan: `php artisan key:generate`

**Error koneksi database**

-   Pastikan MySQL running dan konfigurasi `.env` benar

**CSS tidak muncul**

-   Jalankan: `npm install` dan `npm run dev`

## License

MIT License
