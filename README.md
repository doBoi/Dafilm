# Dafilm

Dafilm - Sebuah aplikasi website yang menampilkan data film dari API TMDb.

## Lingkungan Pengembangan:

-   PHP 7.4 atau yang lebih baru‌
-   ‌Laravel 8.0 atau yang lebih baru
-   Composer

## Installation

clone dafilm with composer

```bash
    git clone https://github.com/nama-akun/nama-proyek.git
```

‌Masuk ke direktori proyek:

```bash
    cd nama-proyek
```

‌Install dependensi dengan Composer:

```bash
     composer install
```

Salin file .env.example ke .env:

```bash
      cp .env.example .env
```

Generate key baru untuk aplikasi Laravel:

```bash
       php artisan key:generate
```

-   Daftar di TMDb untuk mendapatkan API key.
-   Tambahkan API key TMDb di file .env.

Jalankan aplikasi dengan perintah:

```bash
         php artisan serve
```

-   Buka aplikasi di browser dengan mengunjungi http://localhost:8000

## Fitur

-   Menampilkan daftar film terbaru
-   Menampilkan detail film, termasuk gambar, sinopsis.
-   ‌Menampilkan daftar film yang sedang tayang.
-   Menampilkan daftar film yang akan datang.‌
-   ‌Menampilkan daftar film yang paling banyak ditonton.

## Kontribusi

Anda dapat memberikan sumbangan pada proyek ini dengan melakukan hal-hal berikut:

-   ‌Memberikan umpan balik.‌
-   Melaporkan bug.‌
-   Mengajukan permintaan fitur.
-   Mengirimkan pull request untuk memperbaiki masalah atau menambahkan fitur baru.

## Kontak

Jika Anda memiliki pertanyaan atau masalah, Anda dapat menghubungi saya melalui email di maulana4810@gmail.com
