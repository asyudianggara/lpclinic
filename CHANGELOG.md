# Changelog

## 2026-06-01

- Merubah nama website secara menyeluruh dari "ESKomputer" / "Expert System Computer" menjadi **ASGARDEV Laptop Clinic** di landing page publik, halaman member, dan panel administrator
- Membuat logo tech clinic minimalis premium baru (`asgardev_logo.png`) menggunakan AI generator dan menerapkannya pada navbar utama landing page publik dan menu atas member
- Membuat favicon inisial 'A' kustom beresolusi tinggi (`asgardev_favicon.png`) menggunakan AI generator dan menerapkannya di seluruh view header dan auth pages
- Membersihkan credit developer lama ("Repost by StokCoding.com" pada dashboard admin, "By Alfonso0087" pada footer hasil diagnosa)
- Memperbarui akun demo bawaan di database (`tbl_user`) dan file SQL dump (`es_komputer.sql`) menjadi `admin / admin123` dan `user / user123` dengan enkripsi bcrypt standar
- Memperbaiki bug variable `$user` undefined di view topbar dengan meloloskan parameter `$data` pada controller Gejala, Kerusakan, Pengetahuan, dan Laporan
- Merombak total UI/UX Dashboard Member (`member/index.php`) menjadi tampilan dashboard ber-style tech clinic premium yang bersih, banner gradient, kartu aksi interaktif, dan panel tips perawatan hardware
- Mengoptimalkan UI/UX halaman Gejala Member (`member/diagnosa.php`) menjadi sistem grid checkbox card responsif dengan border highlight & bayangan kustom saat dipilih (fungsi active-toggle js)
- Membuat ilustrasi diagnosis teknologi isometrik premium baru (`laptop_diagnostic.png`) menggunakan AI generator untuk mempercantik media visuals landing page utama dan dashboard member
- Merombak welcome banner member menjadi 2-kolom layout dengan deskripsi di sisi kiri dan ilustrasi teknologi isometrik premium di sisi kanan
- Mengganti visual legacy iMac klasik pada public homepage `home/index.php` dengan ilustrasi diagnosis teknologi isometrik modern (desain tumpul, berbayang, dan ber-border putih premium)
- Memperbarui dokumentasi instalasi, panduan akun demo, dan URL localhost di file README.md dan Manual.txt

## 2026-05-31

- Audit struktur project CodeIgniter 3 selesai
- Database `es_komputer` dibuat dan diimport
- Login admin/member diverifikasi
- Halaman publik dan admin diverifikasi
- Flow diagnosa Bayes diperbaiki
- `tmp_final` diisi lengkap dengan field hasil probabilitas default
- Form profile admin diperbaiki
- Path view yang case-sensitive diseragamkan
- Session storage dipindahkan ke folder project yang writable
- Branding ASGARDEV ditambahkan ke footer dan halaman auth
- Dokumentasi README dan deployment disiapkan

## Catatan

Project masih mempertahankan stack asli dan belum direwrite ulang ke framework modern.
