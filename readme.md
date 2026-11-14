# Aplikasi Web Pendataan Mahasiswa (PHP & MySQL)

Project aplikasi web sederhana untuk menginput dan menampilkan data mahasiswa menggunakan **PHP Native (MySQLi)** dan database **MySQL**. Dibuat untuk memenuhi **Tugas UTS**.

## Struktur File
- `database.sql` — Skema pembuatan database `db_mahasiswa` dan tabel `mahasiswa`.
- `koneksi.php` — Konfigurasi koneksi ke database MySQL.
- `index.php` — Halaman form input data mahasiswa (NIM, Nama, Jurusan, Alamat).
- `simpan.php` — Proses validasi (NIM minimal 8 karakter) dan penyimpanan data ke database menggunakan *Prepared Statement*.
- `tampil.php` — Halaman untuk menampilkan daftar mahasiswa (filter jurusan Teknik Informatika) beserta status keaktifannya.
- `style.css` — Pengaturan tata letak form dan tampilan tabel (*zebra striping*).

## Cara Menjalankan
1. Simpan folder project di dalam `htdocs` (XAMPP) atau `www` (Laragon).
2. Jalankan **Apache** dan **MySQL**.
3. Buka `http://localhost/phpmyadmin` dan import file `database.sql`.
4. Buka browser dan akses `http://localhost/mahasiswa/`.

## Identitas
- **Nama:** Dimas riki pratama
- **NIM:** 254242005