# ASGARDEV Laptop Clinic 🩺💻

Sistem pakar (*expert system*) berbasis web yang andal dan modern untuk mendiagnosa kerusakan perangkat keras laptop dan komputer menggunakan metode perhitungan probabilitas Teorema Bayes.

**Premium Portfolio by ASGARDEV**  
Website Resmi: [https://asgardev.karissa.id](https://asgardev.karissa.id)

---

## 📌 Deskripsi Project

**ASGARDEV Laptop Clinic** (sebelumnya ESKomputer) adalah aplikasi legacy berbasis framework **CodeIgniter 3** yang dirombak total dari sisi visual (*UI/UX Finisher*) dan optimalisasi kode (*Code Auditor & Debugger*) oleh ASGARDEV. Sistem membantu pengguna awam maupun teknisi untuk mendiagnosa jenis kerusakan laptop berdasarkan gejala-gejala fisik/teknis yang dipilih, kemudian menghitung persentase probabilitas kerusakan serta memberikan solusi perbaikan lengkap secara instan.

Aplikasi ini dirancang sebagai contoh portofolio siap pakai yang menawan, bersih, dan berstandar industri.

---

## 🌟 Fitur Utama

- **Landing Page Publik**: Tampilan awal berdesain modern dengan ilustrasi teknologi kustom premium.
- **Sistem Autentikasi**: Fitur Login & Registrasi yang dihias dengan latar belakang gradient gelap elegan dan form interaktif.
- **Dashboard Member (Glassmorphism Style)**: Halaman selamat datang interaktif dengan ilustrasi diagnosis teknologi 3D, panel tips perawatan hardware, dan kartu aksi modern.
- **Pilih Gejala Grid Checklist**: Antarmuka pemilihan gejala yang sangat sederhana dan bersih menggunakan format grid 2/3 kolom responsif dengan efek hover card dan visual highlight aktif.
- **Analisis & Grafik Bayes**: Grafik probabilitas horizontal bergradasi linier untuk visualisasi persentase hasil perhitungan secara real-time.
- **Solusi Detail**: Kartu solusi penanganan horizontal berbayang halus lengkap dengan visualisasi gambar kerusakan dan petunjuk langkah-demi-langkah.
- **Dashboard Admin**: Panel admin Gentelella (Bootstrap 3) dengan welcome banner gradien, manajemen CRUD data Gejala, Kerusakan, Basis Pengetahuan (Aturan), dan log Laporan Diagnosa member.

---

## 🛠️ Stack Teknologi

- **Backend**: PHP 8.2 (Compatible dengan CodeIgniter 3)
- **Frontend**: HTML5, Vanilla CSS3 (Custom gradients, glassmorphism, responsive grids), Bootstrap, FontAwesome 4.7, jQuery, pe-icon-7-stroke.
- **Database**: MySQL / MariaDB.
- **Asset Creator**: AI Generated Tech Isometric Illustrations & Vector Assets.

---

## 📋 Persyaratan Sistem (Prerequisites)

Untuk menjalankan project ini secara lokal, pastikan perangkat Anda memenuhi spesifikasi berikut:

- **PHP**: Versi 7.4 s/d 8.2 (Telah diuji dan dioptimalkan pada PHP 8.2.12).
- **Web Server**: Apache (sangat disarankan menggunakan XAMPP).
- **Database Server**: MySQL atau MariaDB.
- **Web Browser**: Chrome, Firefox, Edge, atau browser modern lainnya.

---

## 🚀 Panduan Instalasi Lengkap (Step-by-Step)

### Langkah 1: Unduh / Clone Project
Unduh repository ini dan letakkan ke dalam folder server lokal Anda:
- Jika menggunakan **XAMPP**, ekstrak file project ke direktori `C:\xampp\htdocs\spkkk`.

### Langkah 2: Setup Database MySQL
1. Aktifkan modul **Apache** dan **MySQL** pada panel XAMPP Control Panel.
2. Buka web browser dan akses [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
3. Buat database baru bernama **`es_komputer`**.
4. Pilih database `es_komputer`, masuk ke tab **Import**, lalu pilih file SQL dump yang berada di direktori project:
   - Direktori file SQL: [`database/es_komputer.sql`](./database/es_komputer.sql)
5. Klik **Go** atau **Import** dan tunggu hingga proses pembuatan tabel berhasil.

### Langkah 3: Konfigurasi Database Aplikasi
Sesuaikan kredensial koneksi database MySQL Anda di file config CodeIgniter berikut:
- File Lokasi: [`application/config/database.php`](./application/config/database.php)
```php
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root', // Sesuaikan username MySQL Anda
	'password' => '',     // Sesuaikan password MySQL Anda
	'database' => 'es_komputer',
	'dbdriver' => 'mysqli',
    // ...
);
```

### Langkah 4: Konfigurasi Base URL Aplikasi
Pastikan base URL aplikasi sudah diarahkan ke direktori project Anda:
- File Lokasi: [`application/config/config.php`](./application/config/config.php)
```php
$config['base_url'] = 'http://localhost/spkkk/';
```

---

## 💻 Cara Menjalankan Aplikasi

Setelah langkah-langkah di atas selesai dikonfigurasi:
1. Buka browser modern Anda.
2. Akses alamat web lokal berikut:
   - Halaman Utama: [http://localhost/spkkk/](http://localhost/spkkk/)
   - Halaman Login: [http://localhost/spkkk/auth](http://localhost/spkkk/auth)

---

## 🔐 Kredensial Akun Demo Bawaan

Sistem dilengkapi dengan dua tingkat hak akses (role) default untuk keperluan demo portofolio:

### 1. Hak Akses Administrator
Admin memiliki kendali penuh untuk mengelola master data Gejala, Kerusakan, Aturan Bayes, serta melihat log riwayat diagnosa dari semua member.
- **Username**: `admin`
- **Password**: `admin123`
- **Tingkat Akses**: Admin Panel

### 2. Hak Akses Member
Member dapat melakukan pendaftaran secara mandiri dan langsung mendiagnosa kerusakan laptop berdasarkan gejala yang mereka pilih secara interaktif.
- **Username**: `user`
- **Password**: `user123`
- **Tingkat Akses**: Member Panel

---

## 📈 Pemahaman Singkat Metode Teorema Bayes

Sistem pakar ini menggunakan **Teorema Bayes** untuk menghitung tingkat keyakinan (probabilitas) suatu kerusakan berdasarkan gejala yang dimasukkan oleh pengguna:

$$P(H_i | E) = \frac{P(E | H_i) \cdot P(H_i)}{\sum_{j=1}^{n} P(E | H_j) \cdot P(H_j)}$$

Dimana:
- $P(H_i | E)$: Probabilitas kerusakan $H_i$ setelah adanya gejala $E$ (Posterior Probability).
- $P(E | H_i)$: Probabilitas kemunculan gejala $E$ jika diketahui laptop mengalami kerusakan $H_i$ (Conditional Probability).
- $P(H_i)$: Probabilitas awal dari kerusakan $H_i$ (Prior Probability).
- Pembagi merupakan total sum dari semua perkiraan bersyarat untuk seluruh jenis kerusakan yang terdaftar.

---

## 📂 Struktur Folder Utama

```text
spkkk/
├── application/           # Kode aplikasi utama (MVC)
│   ├── config/            # Berisi database.php, config.php, routes.php
│   ├── controllers/       # Logika pengendali (Admin, Member, Diagnosa, Auth)
│   ├── models/            # Logika manipulasi data database (Diagnosa_model, dll.)
│   └── views/             # File template tampilan HTML & CSS
├── assets/                # Aset statis CSS, JS, dan Gambar untuk Panel Admin
├── assets2/               # Aset statis dan Media Visual Ilustrasi Landing Page & Member
├── database/              # File skema database SQL es_komputer.sql
├── CHANGELOG.md           # Catatan riwayat pengerjaan audit & finishing
├── DEPLOYMENT.md          # Panduan hosting/deployment server cPanel
└── README.md              # Dokumentasi lengkap panduan ini
```

---

## 🤝 Kontribusi & Lisensi

Pekerjaan audit, pembersihan credit lama, pemolesan estetika UI/UX premium (*rich interface*), dan pembuatan aset visual modern ini secara eksklusif dikerjakan oleh **ASGARDEV**.

Jika Anda menemukan bug tambahan atau ingin melakukan integrasi fitur baru, silakan lakukan fork pada repository ini, buat branch baru, dan kirimkan Pull Request.

**Developed by ASGARDEV**  
*Quality Software & Premium Portfolio Creator.*
