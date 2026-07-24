# 🥐 Bakery House - Aplikasi Manajemen Bakery

**Bakery House** adalah aplikasi web manajemen toko bakery modern yang dirancang untuk mengelola produk, stok barang, serta transaksi secara efisien. Sistem ini dibangun menggunakan **Laravel 11** dan **Filament PHP** untuk menyediakan antarmuka panel admin yang intuitif dan responsif.

Proyek ini dibuat untuk memenuhi tugas **Ujian Akhir Semester (UAS) - Pemrograman Web Lanjut**.

---

## 👤 Identitas Mahasiswa

* **Nama:** Monica Annisa Fitri
* **NIM:** 230170143
* **Mata Kuliah:** Pemrograman Web Lanjut

---

## 🚀 Fitur Utama & Pembagian Hak Akses (Role)

Sistem ini menggunakan **Role-Based Access Control (RBAC)** untuk memisahkan hak akses:

### 1. Hak Akses Admin
* **Dashboard Statistik:** Ringkasan data produk, stok barang, dan total transaksi.
* **Manajemen CRUD Produk/Barang:** Menambah, melihat, memperbarui, dan menghapus data bakery.
* **Manajemen User:** Mengelola data pengguna dan hak akses sistem.

### 2. Hak Akses User / Pelanggan
* **Katalog Produk:** Melihat daftar pilihan roti dan kue yang tersedia.
* **Pemesanan Online:** Melakukan pemesanan produk secara langsung.

---

## 🔑 Akun Demo (Demo Accounts)

Untuk mempermudah penilaian dan pengujian oleh Dosen, gunakan akun berikut untuk masuk ke sistem:

* **Akun Login:**
  * **Email:** `monica@gmail.com`
  * **Password:** `230170143`

---

## 🛠️ Langkah Instalasi & Cara Menjalankan Aplikasi

Pastikan Anda memiliki **PHP (v8.2+)**, **Composer**, dan **Laragon / MySQL** yang sudah berjalan di sistem Anda.

---
### Dokumentasi Screenshot

# 1. Halaman Login
<img width="637" height="557" alt="image" src="https://github.com/user-attachments/assets/85f60c92-99f3-416c-add0-e49222938982" />

## 2. Dashboard
<img width="1600" height="759" alt="image" src="https://github.com/user-attachments/assets/a209b615-237a-4bb6-9649-1bf509bade6e" />

## 3.CRUD
Halaman bagi admin untuk mengelola (Create,Read,Update,Delete) untuk bakery house
<img width="1600" height="757" alt="image" src="https://github.com/user-attachments/assets/88a4f817-7942-4273-899a-b581b5646f73" />

## 4.📡 Hasil Pengujian Proses REST API

Berikut adalah hasil pengujian endpoint API (`GET /api/products`) yang berhasil mengambil seluruh data produk dari database:
<img width="643" height="851" alt="image" src="https://github.com/user-attachments/assets/514c6be4-d569-484b-9a18-012a494aced9" />

## 5. Halaman Login Mobile
<img width="738" height="1600" alt="image" src="https://github.com/user-attachments/assets/23bd5974-8dcd-4ea8-ba09-5c7b6ff67fd7" />

## 6. Dashboard Mobile
<img width="738" height="1600" alt="image" src="https://github.com/user-attachments/assets/69fb43df-3816-4f25-b00d-e2031da83bcd" />

## 7. CRUD Mobile
<img width="738" height="1600" alt="image" src="https://github.com/user-attachments/assets/24526dee-e5e5-4db4-a142-a7402f5f419b" />

### Clone Repository
git clone https://github.com/monica110705/bakery-house-app.git
cd bakery-house-app
