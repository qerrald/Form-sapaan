# Praktikum AJAX PHP — Form Sapa

## Deskripsi

Project ini merupakan tugas praktikum untuk membuat aplikasi web sederhana berupa **Form Sapa menggunakan AJAX dan PHP**. Pengguna memasukkan nama melalui formulir, kemudian data dikirim ke server menggunakan metode HTTP POST. Server memvalidasi nama dan mengirimkan respons yang ditampilkan pada halaman tanpa memuat ulang seluruh halaman.

## Tujuan Praktikum

- Memahami konsep AJAX dalam pengembangan web.
- Memahami komunikasi antara JavaScript dan PHP.
- Mengirim data dari halaman web ke server menggunakan metode HTTP POST.
- Memproses input dan mengirimkan respons dari PHP.
- Menampilkan respons server tanpa melakukan reload halaman.

## Tools yang Digunakan

- **Visual Studio Code** — untuk membuat dan mengedit file project.
- **PHP** — untuk memproses request pada sisi server.
- **Google Chrome atau browser lain** — untuk menjalankan dan menguji aplikasi.
- **PHP Built-in Development Server** — untuk menjalankan project secara lokal.

> Project ini tidak membutuhkan database. DBngin tidak perlu dijalankan. Jika menggunakan Laravel Herd, PHP dari instalasi Herd dapat digunakan, tetapi web server bawaan PHP juga dapat dipakai sehingga Nginx dan DNS Herd tidak harus aktif.

## Struktur Folder

```text
TPMOD10/
├── index.html
├── server.php
└── README.md
```

### Keterangan File

- `index.html`: menampilkan form input nama, tombol Kirim, area respons, dan kode JavaScript untuk mengirim request AJAX.
- `server.php`: menerima data nama melalui metode POST, memvalidasi input, lalu mengirimkan respons teks.
- `README.md`: berisi dokumentasi project dan panduan menjalankannya.

## Cara Menjalankan Project di macOS

### 1. Buka folder project

Pastikan folder `TPMOD10` tersimpan di lokasi yang mudah ditemukan. Jika mengikuti konfigurasi Herd, folder dapat diletakkan di:

```text
~/Herd/TPMOD10
```

### 2. Buka Terminal

Masuk ke direktori project:

```bash
cd ~/Herd/TPMOD10
```

Jika folder disimpan di lokasi lain, sesuaikan alamat direktori pada perintah tersebut.

### 3. Jalankan PHP Built-in Server

Jalankan perintah:

```bash
php -S 127.0.0.1:8000
```

Biarkan Terminal tetap terbuka selama aplikasi digunakan. Jika server berhasil dijalankan, PHP akan menampilkan pesan bahwa development server sedang mendengarkan pada alamat `http://127.0.0.1:8000`.

### 4. Buka aplikasi di browser

Buka alamat berikut di Google Chrome:

```text
http://127.0.0.1:8000
```

### 5. Hentikan server

Jika sudah selesai, kembali ke Terminal lalu tekan:

```text
Control + C
```

## Alur Kerja Aplikasi

1. Pengguna membuka halaman `index.html`.
2. Pengguna memasukkan nama ke dalam kolom input.
3. Ketika tombol **Kirim** ditekan, JavaScript menangani event submit dan mencegah form melakukan reload halaman.
4. JavaScript mengirim nilai nama ke `server.php` menggunakan Fetch API dengan metode HTTP POST.
5. `server.php` menerima nilai melalui `$_POST["nama"]`.
6. PHP memeriksa apakah nama kosong.
7. Jika nama kosong, server mengirim pesan: `Input nama tidak boleh kosong!`
8. Jika nama terisi, PHP mengamankan teks nama menggunakan `htmlspecialchars()` dan mengirim pesan sapaan.
9. JavaScript menerima respons server dan menampilkannya pada area **Respon Server** tanpa reload halaman.

## Pengujian

| Skenario | Input | Hasil yang Diharapkan |
|---|---|---|
| Halaman pertama kali dibuka | Belum ada input | `Menunggu input...` |
| Input kosong | Kosong | `Input nama tidak boleh kosong!` |
| Input terisi | `Gerrald` | `Halo, Gerrald! Selamat datang di AJAX!` |
| Input terisi | `Alex` | `Halo, Alex! Selamat datang di AJAX!` |

## Penjelasan AJAX

**AJAX (Asynchronous JavaScript and XML)** adalah teknik yang memungkinkan halaman web berkomunikasi dengan server secara asynchronous tanpa harus memuat ulang seluruh halaman. Dalam project ini, JavaScript menggunakan Fetch API untuk mengirim data nama ke `server.php`. Server memproses data tersebut dan mengirimkan respons yang kemudian ditampilkan pada halaman.

## Jawaban Essay

### 1. Jelaskan apa itu AJAX dan bagaimana cara kerjanya dalam konteks pengembangan web!

AJAX (Asynchronous JavaScript and XML) adalah teknik dalam pengembangan web yang memungkinkan halaman website berkomunikasi dengan server secara asynchronous tanpa harus memuat ulang seluruh halaman (*reload*).

Cara kerja AJAX dimulai ketika pengguna melakukan suatu tindakan pada halaman web, misalnya mengisi formulir dan menekan tombol kirim. JavaScript kemudian mengirimkan permintaan (*request*) ke server menggunakan teknologi seperti XMLHttpRequest atau Fetch API. Server menerima dan memproses permintaan tersebut, kemudian mengirimkan hasilnya kembali kepada browser. Selanjutnya, JavaScript menampilkan respons dari server pada bagian halaman yang diperlukan tanpa melakukan reload seluruh halaman.

Dengan AJAX, interaksi antara pengguna dan website menjadi lebih cepat, efisien, dan responsif.

### 2. Sebutkan contoh kasus nyata di mana AJAX digunakan untuk meningkatkan pengalaman pengguna (User Experience)!

Salah satu contoh penggunaan AJAX adalah fitur pencarian otomatis (*autocomplete search*). Ketika pengguna mengetikkan kata kunci pada kolom pencarian, halaman dapat mengirimkan permintaan ke server secara asynchronous. Server memproses kata kunci tersebut dan mengirimkan beberapa rekomendasi pencarian yang sesuai. Rekomendasi tersebut kemudian ditampilkan tanpa harus memuat ulang halaman.

Penggunaan AJAX pada fitur ini memberikan beberapa manfaat:

1. Mempercepat proses pencarian informasi.
2. Mengurangi kebutuhan untuk memuat ulang seluruh halaman.
3. Memberikan respons secara langsung ketika pengguna mengetik.
4. Membuat website lebih interaktif dan nyaman digunakan.

Dengan demikian, AJAX dapat meningkatkan pengalaman pengguna karena membuat interaksi dengan website menjadi lebih cepat, praktis, dan responsif.

## Catatan

- Pastikan file `index.html` dan `server.php` berada dalam folder yang sama.
- Akses aplikasi melalui alamat server lokal, bukan dengan membuka file HTML langsung dari Finder, agar request ke PHP dapat diproses.
- DBngin tidak diperlukan karena project ini tidak menyimpan data ke database.
