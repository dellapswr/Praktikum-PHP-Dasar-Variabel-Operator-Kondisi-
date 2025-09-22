# 🌸 Praktikum Pemrograman Internet — PHP Dasar

✨ Hi!! Selamat datang di proyek kecil kami!  

Repositori ini berisi implementasi *praktikum Pemrograman Internet (ProgNet)*.  
Tujuan dari praktikum adalah memahami konsep dasar pemrograman web menggunakan *PHP*, meliputi:  

- *Variabel & Operator* → dasar pengolahan data.  
- *Kondisi (if-else, switch-case)* → pengambilan keputusan.  
- *Form Input/Output + Validasi* → interaksi user dengan server.  
- *Array (indexed, associative, multidimensi)* → penyimpanan data terstruktur.  
- *Looping (for, foreach)* → menampilkan data secara dinamis.  

Semua tugas dibuat dengan struktur terorganisir, validasi sederhana, serta tampilan *CSS tema pastel coklat* agar konsisten dan nyaman dibaca.

# 🔗Tugas 1 — Variabel, Operator, Kondisi
Dalam proyek ini, setiap mahasiswa diminta untuk membuat beberapa program kecil menggunakan PHP, dengan alur *form → server → output*.  
Masing-masing program memiliki fungsi dan tujuan yang berbeda, yaitu:

### 🔹 1. Form Ucapan
- Input: nama (validasi hanya huruf/spasi, tidak boleh kosong).  
- Output: ucapan personal seperti Halo, [Nama], selamat belajar PHP!.  

### 🔹 2. Kalkulator Sederhana
- Input: dua angka + operator (tambah, kurang, kali, bagi).  
- Proses: switch-case.  
- Output: hasil perhitungan.  

### 🔹 3. Menentukan Bilangan Ganjil / Genap (+ Prima)
- Input: angka.  
- Output: keterangan ganjil/genap serta apakah angka tersebut bilangan prima.  

### 🔹 4. Konversi Nilai → Huruf
- Input: nilai angka 0–100.  
- Proses: validasi (nilai di luar range atau bukan angka akan error).  
- Output: nilai huruf (A, B+, B, C+, dst).  

### 🔹 5. Menu Makanan
- Input: pilih menu makanan, jumlah, stok (dilengkapi gambar).  
- Proses: switch-case.  
- Output: detail pesanan + total harga.  

### 🔹 6. Form Biodata Singkat
- Input: nama, umur, jenis kelamin, alamat (validasi nama hanya huruf/spasi).  
- Output: biodata yang ditampilkan kembali dalam format kalimat deskriptif.  

---

## 🎲 Tools yang Digunakan

- *Bahasa Pemrograman* : PHP 8 (via XAMPP)  
- *Web Server* : Apache (XAMPP)  
- *Text Editor* : Visual Studio Code  
- *Version Control* : Git & GitHub  
- *UI/Styling* : 
  - HTML5 Form Elements
  - CSS3 (custom pastel earthy theme: krem, coklat, hijau pastel)  
  - Flexbox (untuk layout card menu)  
  - Sedikit JavaScript (untuk validasi input dan interaksi menu makanan)  

---

## 🎨 Tampilan UI

Semua halaman menggunakan tema *pastel earthy (krem, coklat, hijau pastel)* untuk memberi kesan lembut dan mudah dibaca.  
Error ditampilkan dengan alert atau box merah pastel, sementara hasil/output ditampilkan dengan box hijau pastel.  
Komponen utama pada UI:  
- *Form Input* → rapi dengan label dan placeholder.  
- *Button* → warna pastel coklat/cream dengan efek hover.  
- *Error Message* → ditampilkan dalam box merah pastel agar mudah dikenali.  
- *Result/Output* → ditampilkan dalam box hijau pastel agar membedakan hasil dengan input.  
- *Menu Makanan* → menampilkan pilihan beserta gambar, harga, dan stok.

---

## ⚡ Cara Menjalankan
1. Simpan project di: C:\xampp\htdocs\ProgNet\Tugas1_PHP
2. Jalankan *Apache* di XAMPP.
3. Buka di browser: http://localhost/ProgNet/Tugas1_PHP/index.php

---

# 💻 Tampilan Form
## 🦋 Menu Utama 
<img width="1919" height="1005" alt="image" src="https://github.com/user-attachments/assets/0603c17d-9ede-4222-825e-c0e60a68c31d" />

## 🦄 Form Ucapan

1. Greeting Form

* Tampilan Awal
<img width="1919" height="1003" alt="image" src="https://github.com/user-attachments/assets/d1285164-48e4-4b72-b799-691ec5fe643a" />


* Tampilan Setelah diisi nama
<img width="1919" height="1003" alt="image" src="https://github.com/user-attachments/assets/181e51da-5b16-43d7-b132-cb138ebf75a8" />


2. Greeting Result
<img width="1919" height="1002" alt="image" src="https://github.com/user-attachments/assets/2f744af0-dc8c-4151-b386-3c84391e71e1" />


3. Validasi Tanda Baca
<img width="1919" height="1001" alt="image" src="https://github.com/user-attachments/assets/5f1d7cf1-a408-4952-b0a3-d4484cd9c706" />


4. Validasi Angka
<img width="1919" height="1003" alt="image" src="https://github.com/user-attachments/assets/066ae088-6864-4463-ac40-0fca9524876a" />


## 🕷 Kalkulator Sederhana

# Tambah (+)
1. Calculator Form
<img width="1919" height="1002" alt="image" src="https://github.com/user-attachments/assets/fa4c0cb3-fed9-4318-803b-49522b7d8c71" />


2. Calculator Result
<img width="1919" height="1002" alt="image" src="https://github.com/user-attachments/assets/3f9b3fd2-57ea-4ccf-8866-8f65a41b663b" />


# Kurang (-)

1. Calculator Form
<img width="1919" height="1004" alt="image" src="https://github.com/user-attachments/assets/6ad4b43b-cfe2-49d7-b6a4-e08eb0ce00ad" />


2. Calculator Result
<img width="1919" height="1000" alt="image" src="https://github.com/user-attachments/assets/09542dc2-9f5e-406f-a4ea-b2e3686055ed" />


# Kali (x)

1. Calculator Form
<img width="1919" height="1003" alt="image" src="https://github.com/user-attachments/assets/461a0c37-3d9a-4d15-b66a-76031281c1cc" />


2. Calculator Result
<img width="1919" height="998" alt="image" src="https://github.com/user-attachments/assets/9507f802-a33e-4af1-b326-a2908a361a35" />


# Bagi (:)

1. Calculator Form
<img width="1919" height="1002" alt="image" src="https://github.com/user-attachments/assets/ce7d79bb-1ef1-4f4f-9f7e-50a14b79f18c" />


2. Calculator Result
<img width="1919" height="994" alt="image" src="https://github.com/user-attachments/assets/cf2b94bf-52e5-4a80-b059-d91bebdd5373" />


# Validasi
<img width="1910" height="998" alt="image" src="https://github.com/user-attachments/assets/11d9e06a-21ca-48db-9251-b0d47f1e48c3" />


## 🐬 Menentukan Ganjil / Genap + Prima

1. Parity Form
<img width="1919" height="1003" alt="image" src="https://github.com/user-attachments/assets/a7e6642b-4ac3-455a-99af-518d48ef2653" />


2. Parity Result
<img width="1919" height="1000" alt="image" src="https://github.com/user-attachments/assets/44b87dfd-5919-4202-828b-89e16e63f1e2" />


## 🦢 Menentukan Nilai Huruf

1. Grade Form
<img width="1919" height="1001" alt="image" src="https://github.com/user-attachments/assets/9a157ec9-6223-42b6-a295-8b9dd1c35dcd" />


2. Grade Result
<img width="1919" height="1002" alt="image" src="https://github.com/user-attachments/assets/849929ad-6149-4e77-98f1-4477683e722c" />


## 🥘 Menu Makanan

1. Menu Form
<img width="1919" height="1002" alt="image" src="https://github.com/user-attachments/assets/25233bfe-c4c4-46cf-8a8f-5aba36236c1c" />


2. Menu Result
<img width="1919" height="996" alt="image" src="https://github.com/user-attachments/assets/d8ab9e03-6940-4c52-926c-a34416abea44" />


3. Validasi Tidak Memilih
<img width="1919" height="999" alt="image" src="https://github.com/user-attachments/assets/6018929d-5c3f-43f3-a379-cca92ff9e967" />


4. Validasi Stok Lebih
<img width="1919" height="999" alt="image" src="https://github.com/user-attachments/assets/4e802283-91b5-480e-8bb3-408b420ee53f" />


## 🕊 Form Biodata Singkat 

1. Biodata Form
<img width="1890" height="1003" alt="image" src="https://github.com/user-attachments/assets/76fda299-79ef-4ff4-a7a4-adf6246dc004" />


2. Biodata Result
<img width="1919" height="999" alt="image" src="https://github.com/user-attachments/assets/40a7a010-c54f-4a65-b43c-c32d97938bed" />


3. Validasi Nama Angka
<img width="1889" height="1000" alt="image" src="https://github.com/user-attachments/assets/3aa5f3f4-4064-465d-8948-2d37a4a8a29c" />


4. Validasi Nama Tanda Baca
<img width="1889" height="1004" alt="image" src="https://github.com/user-attachments/assets/261d4ba6-7115-4f44-b469-7b7d2bb6a590" />


5. Validasi Jenis Kelamin Belum Dipilih
<img width="1879" height="999" alt="image" src="https://github.com/user-attachments/assets/4f6036dd-3824-461c-8cb8-10907276e722" />

---

## 📝 Penutup
Tugas ini dibuat untuk memenuhi praktikum *Pemrograman Internet (PHP Dasar)* dan sebagai sarana latihan dalam memahami konsep dasar pemrograman web.  

Dengan adanya implementasi form input, validasi data, penggunaan kondisi (if-else dan switch-case), serta styling sederhana dengan CSS, diharapkan mahasiswa dapat:  
- Memahami alur *client → server → client* dalam proses pengolahan data.  
- Terbiasa menambahkan *validasi* agar aplikasi lebih aman dan reliabel.  
- Mengenal dasar-dasar *interaktivitas web* sebelum masuk ke tahap lanjutan (database, session, dll).  

---

# 🔗Tugas 2 — Looping & Array
Dalam proyek ini, mahasiswa diminta untuk mengimplementasikan penggunaan *looping* dan *array* dalam PHP, dengan tujuan untuk memahami cara menampilkan data yang lebih kompleks dan terstruktur.  
Masing-masing program memiliki fungsi dan tujuan yang berbeda, yaitu:  

### 🔹 1. Menampilkan Angka Genap
- Input: angka dari form.  
- Proses: menampilkan deret bilangan genap dari 1 sampai N menggunakan for.  
- Output: deret bilangan genap yang ditampilkan secara berurutan.  

### 🔹 2. Daftar Barang (Indexed Array)
- Data: array sederhana berisi daftar barang (contoh: buku, pulpen, penggaris, dll).  
- Proses: ditampilkan dengan foreach.  
- Output: daftar barang dalam bentuk list.  

### 🔹 3. Daftar Mahasiswa (Associative Array)
- Data: array dengan pasangan key-value (NIM → Nama).  
- Proses: ditampilkan dengan foreach.  
- Output: daftar mahasiswa dalam bentuk tabel.  

### 🔹 4. Daftar Harga Barang
- Data: associative array berisi nama barang dan harga.  
- Proses: looping untuk menampilkan ke tabel.  
- Output: daftar barang + harga, ditampilkan dengan rata kanan untuk harga.  

### 🔹 5. Data Mahasiswa Multidimensi
- Data: array multidimensi berisi NIM, Nama, Umur, dan Prodi.  
- Proses: looping bersarang untuk membaca isi array.  
- Output: tabel data mahasiswa dengan format rapi.  

### 🔹 6. Data Mahasiswa dengan Nilai & Status Kelulusan
- Data: array multidimensi dengan tambahan atribut nilai.  
- Proses: looping + kondisi untuk menentukan status.  
- Output: tabel mahasiswa dengan kolom nilai & status:  
  - *Lulus* jika nilai ≥ 70 → ditampilkan dengan warna hijau pastel.  
  - *Tidak Lulus* jika nilai < 70 → ditampilkan dengan warna merah pastel.  

---

## 🎲 Tools yang Digunakan
- *Bahasa Pemrograman* : PHP 8 (via XAMPP)  
- *Web Server* : Apache (XAMPP)  
- *Text Editor* : Visual Studio Code  
- *Version Control* : Git & GitHub  
- *UI/Styling* :  
  - HTML5 Tabel dan Form  
  - CSS3 (tema pastel earthy: krem, coklat, hijau pastel, merah pastel)  

---

## 🎨 Tampilan UI
Semua halaman menggunakan tema *pastel earthy* yang konsisten dengan Tugas 1.  
Komponen utama pada UI:  
- *Tabel Data* → border lembut, warna baris bergantian (striped).  
- *Button Navigasi* → tombol kembali ke menu, warna pastel coklat, posisi di tengah.  
- *Status Kelulusan* → badge berwarna: hijau pastel untuk Lulus, merah pastel untuk Tidak Lulus.  

---

## ⚡ Cara Menjalankan
1. Simpan project di: C:\xampp\htdocs\ProgNet\Tugas2_PHP
2. 2. Jalankan *Apache* di XAMPP.  
3. Buka di browser: http://localhost/ProgNet/Tugas2_PHP/index.php

---

# 💻 Tampilan Form & Output
## 🦋 Menu Utama
<img width="1919" height="1003" alt="image" src="https://github.com/user-attachments/assets/47828b0d-98b1-419e-93de-f96fa4a444ce" />

## 🦚 Menampilkan Daftar Barang
<img width="1919" height="1003" alt="image" src="https://github.com/user-attachments/assets/c7bc933e-cb04-46a5-98dd-b4f1964080fe" />

## 🧑🏻‍🎓 Daftar Mahasiswa
<img width="1919" height="1005" alt="image" src="https://github.com/user-attachments/assets/feada1eb-cc34-4bb7-9783-be4e555f7041" />

## 📃 Daftar Harga Barang
1. Atas
<img width="1919" height="1005" alt="image" src="https://github.com/user-attachments/assets/fb7ffe43-4851-4a08-8ee3-d9a15fbd2bf7" />

2. Bawah
<img width="1919" height="1004" alt="image" src="https://github.com/user-attachments/assets/70359a6c-9e30-4904-bd49-261e7de28c6d" />

## 🗂 Menampilkan Bilangan Genap
1. Tampilan Awal
<img width="1919" height="1008" alt="image" src="https://github.com/user-attachments/assets/49d3e5a0-39fe-4903-8085-9914f8f18eb5" />

2. Memasukkan Nilai
<img width="1919" height="1000" alt="image" src="https://github.com/user-attachments/assets/0fe9437b-b102-4dd4-86b3-fde966c6285a" />

3. Hasil Akhir
<img width="1919" height="1002" alt="image" src="https://github.com/user-attachments/assets/f9784114-c786-44da-af93-9d4a16071104" />

4. Validasi Apabila Bilangan Bukan Merupakan Bilangan Genap

- Batas Awal
<img width="1919" height="1003" alt="image" src="https://github.com/user-attachments/assets/1cfe44c6-2f58-4ece-b2ff-2b47e636367a" />

- Batas Akhir
<img width="1919" height="1002" alt="image" src="https://github.com/user-attachments/assets/6d8ed95a-7d56-45bc-aa01-9339f49b2926" />

5. Validasi Apabila Tidak Memasukkan Bilangan Apapun
<img width="1917" height="994" alt="image" src="https://github.com/user-attachments/assets/d17d7a2e-b7ec-4c25-a1a8-58e25a1a7101" />

6. Validasi Apabila Rentang Nilai Sama
<img width="1919" height="1004" alt="image" src="https://github.com/user-attachments/assets/f0da9b05-9eea-4bc6-890c-9d09d30c7b20" />

7. Validasi Apabila Batas Awal Lebih Besar Dibanding Batas Akhir
<img width="1919" height="998" alt="image" src="https://github.com/user-attachments/assets/4f11a484-b07f-4551-aa5e-e2d900ab65f3" />

## 🐦‍🔥 Array Multidimensi
1. Atas
<img width="1919" height="1004" alt="image" src="https://github.com/user-attachments/assets/b5095a87-a6cb-4560-bee1-5f3171b8d4d9" />

2. Bawah
<img width="1919" height="1004" alt="image" src="https://github.com/user-attachments/assets/38e83986-0505-4478-979f-c8f657c26ebd" />

## 📈 Nilai Mahasiswa
1. Atas
<img width="1919" height="1007" alt="image" src="https://github.com/user-attachments/assets/b80fa9ab-ac5f-44ee-bbd5-3b83c1ce217a" />

2. Bawah
<img width="1919" height="1006" alt="image" src="https://github.com/user-attachments/assets/5a67dff2-59c6-49df-b1ab-11c8275b9ae4" />

---

## 📝 Penutup
Tugas ini dibuat untuk memenuhi praktikum *Pemrograman Internet (PHP Dasar)* dengan fokus pada *array* dan *looping*.  

Dengan adanya latihan ini, mahasiswa diharapkan dapat:  
- Memahami penggunaan array (indexed, associative, multidimensi).  
- Menguasai teknik looping (for, foreach) untuk menampilkan data.  
- Menambahkan kondisi pada data (misalnya status kelulusan).  
- Membuat tampilan lebih interaktif dan informatif dengan CSS.
