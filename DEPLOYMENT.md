# Deployment Guide

## Target

- XAMPP local
- Shared hosting / cPanel

## Struktur Wajib

- Letakkan source project di document root atau subfolder hosting
- Pastikan `application/` dan `system/` tetap utuh
- Pastikan `assets/`, `assets2/`, `assetsdiagnosa/`, `assetshasil/` ikut ter-upload

## Database

1. Buat database `es_komputer`
2. Import file [`database/es_komputer.sql`](./database/es_komputer.sql)
3. Update koneksi pada [`application/config/database.php`](./application/config/database.php)

## Permission

Pastikan folder berikut writable:

- `application/cache/`
- `application/cache/sessions/`
- `assets/images/kerusakan/`

## Base URL

Jika project dipindah ke subfolder hosting, sesuaikan `base_url` di [`application/config/config.php`](./application/config/config.php).

## Catatan PHP 8.2

Project ini menggunakan CodeIgniter 3 legacy. Di environment ini warning deprecation sudah disembunyikan agar demo tetap bersih.

## Checklist Deployment

- Apache aktif
- MySQL/MariaDB aktif
- Database berhasil diimport
- Login demo berhasil
- Halaman publik terbuka
- Halaman admin terbuka
- Diagnosa berhasil submit
- Asset tampil normal
