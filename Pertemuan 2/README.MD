# The Wedding: Mas Guntur dan Mbak Alia

## i. Judul Praktikum

Pembuatan Buku Tamu Sederhana untuk Acara Pernikahan Menggunakan PHP

## ii. Tujuan

Tujuan dari praktikum ini adalah untuk membuat aplikasi web sederhana yang memungkinkan pengguna untuk mengisi dan melihat buku tamu pada acara pernikahan. Aplikasi ini memiliki fitur:

1. Halaman landing page dengan detail acara.
2. Formulir untuk mengisi buku tamu.
3. Halaman untuk melihat daftar buku tamu yang telah diisi.

## iii. Penjelasan Setiap Kode

### 1. `index.php`

Ini adalah halaman utama yang menampilkan detail acara pernikahan. Pada halaman ini terdapat dua tautan:

- **Isi Buku Tamu**: Tautan menuju halaman formulir pengisian buku tamu.
- **Lihat Buku Tamu**: Tautan untuk melihat daftar tamu yang sudah mengisi buku tamu.

Kode ini mengatur struktur dan gaya halaman:

- Menggunakan HTML dan CSS untuk membuat layout sederhana dengan heading dan gambar.
- Tautan diatur menggunakan elemen `<a>` yang mengarah ke halaman lain (`isibukutamu.php` dan `lihatbukutamu.php`).

### 2. `isibukutamu.php`

Halaman ini berisi formulir untuk mengisi buku tamu. Pengguna dapat memasukkan nama, email, komentar, dan memilih gender. Setelah formulir diisi, data akan dikirim ke `proses.php` untuk disimpan.

Penjelasan bagian-bagian kode:

- **Formulir**: Menggunakan metode POST untuk mengirimkan data ke `proses.php`.
- **Input**: Ada input teks untuk nama dan email, textarea untuk komentar, serta pilihan radio untuk gender.
- **Validasi**: Semua input menggunakan atribut `required` untuk memastikan data yang dikirim lengkap.

### 3. `lihatbukutamu.php`

Halaman ini menampilkan daftar tamu yang sudah mengisi buku tamu. Data tamu diambil dari file `bukutamu.txt` dan ditampilkan dalam bentuk tabel.

Penjelasan bagian-bagian kode:

- Menggunakan PHP untuk membaca file `bukutamu.txt` dan menampilkan data dalam format tabel HTML.
- Jika file tidak ada atau belum ada yang mengisi buku tamu, akan ditampilkan pesan "Belum ada data buku tamu".
- Menampilkan nama pengunjung terakhir yang disimpan dalam cookies.

### 4. `proses.php`

Script ini memproses data yang dikirimkan dari formulir buku tamu. Setelah data diproses, data disimpan di file `bukutamu.txt`.

Penjelasan bagian-bagian kode:

- **Fungsi `clean_input()`**: Membersihkan input dari spasi, karakter berbahaya, dan kemungkinan XSS (Cross-Site Scripting).
- **Penyimpanan Cookies**: Nama tamu yang diisi disimpan di cookies selama 1 hari.
- **Simpan Data**: Data tamu disimpan di file `bukutamu.txt` dalam format: `Nama | Email | Komentar | Gender`.
- **Tanggapan**: Setelah data disimpan, halaman ini menampilkan pesan terima kasih beserta tautan kembali ke halaman utama.
