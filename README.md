# UJK JWP PHP Native
## Sistem Manajemen Data Laundry

## Identitas
Nama: Intan Rahmawati  
NIM: 220102017  
Program Studi: D4 Teknologi Rekayasa Perangkat Lunak  

---

## Deskripsi Proyek

Aplikasi Sistem Manajemen Data Laundry berbasis PHP Native ini digunakan untuk mengelola data layanan laundry pelanggan. Sistem ini membantu admin dalam mencatat, mengelola, dan memantau data transaksi laundry seperti jenis layanan, berat cucian, dan total biaya secara efisien. Aplikasi ini juga dilengkapi dengan sistem autentikasi untuk menjaga keamanan data.

---

## Fitur
- Login menggunakan Session (Autentikasi User)
- CRUD Data Laundry (Create, Read, Update, Delete)
- Proteksi halaman (hanya user yang sudah login)
- Tampilan menggunakan Bootstrap 5

---

## Struktur Database

### Tabel: users
- id  
- nama  
- email (unique)  
- password (hashed)  

### Tabel: laundry
- id  
- nama_pelanggan  
- jenis_laundry  
- berat  
- total_harga  
- created_at  