# UJK JWP PHP Native
## Sistem Manajemen Data Laundry

## Identitas
Nama: Intan Rahmawati  
NIM: 220102017  
Program Studi: D4 Teknologi Rekayasa Perangkat Lunak  

---

## Deskripsi Proyek

Aplikasi Sistem Manajemen Data Laundry berbasis PHP Native ini digunakan untuk mengelola data layanan laundry pelanggan. Sistem ini membantu admin dalam mencatat, mengelola, dan memantau data transaksi laundry seperti nama pelanggan, kategori layanan, berat cucian, dan total biaya secara efisien. Aplikasi ini juga dilengkapi dengan sistem autentikasi menggunakan session untuk menjaga keamanan akses, sehingga hanya pengguna yang telah login yang dapat mengakses fitur CRUD dalam sistem.

---

## Fitur
- Sistem Login (Autentikasi menggunakan Session)
- Proteksi halaman (hanya user login yang dapat mengakses)
- CRUD Data Laundry (Tambah, Tampil, Edit, Hapus)
- CRUD Kategori Laundry
- Relasi antara Laundry dan Kategori
- Tampilan menggunakan Bootstrap 5

---

## Struktur Database

### Tabel: users
- id  
- nama  
- email (unique)  
- password (hashed) 

### Tabel: kategori_laundry
- id
- nama_kategori
- deskripsi

### Tabel: laundry
- id 
- kategori_id 
- nama_pelanggan  
- jenis_laundry  
- berat  
- total_harga  
- created_at  