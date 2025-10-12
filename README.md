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

---

# 🔗Tugas 3 — PHP, MySQL, AJAX & JSON
Dalam proyek ini, mahasiswa diminta membuat aplikasi sederhana untuk mengelola data mahasiswa dan nilai secara dinamis, dengan integrasi antara frontend (HTML, CSS, JS) dan backend (PHP, MySQL).
Semua fitur CRUD (Create, Read, Update, Delete) harus berjalan, dengan pencarian data menggunakan AJAX.

---

## 🎯 Tujuan Pembelajaran
- Memahami proses client–server asynchronous menggunakan AJAX.
- Menerapkan validasi data di sisi client dan server.
- Mengelola data menggunakan database MySQL.
- Mengirim dan menerima data dalam format JSON.
- Mendesain UI yang konsisten, rapi, dan user-friendly.

---

## 🖥️ Teknologi yang Digunakan
- **Frontend:** HTML5, CSS3, JavaScript (AJAX Fetch API)  
- **Backend:** PHP 8  
- **Database:** MySQL  
- **Format Data:** JSON  
- **Tema:** Pastel Coklat  

---

## 🧩 Fitur Utama
✨ **Fitur CRUD Mahasiswa**
- Tambah data mahasiswa baru  
- Edit data mahasiswa  
- Hapus data mahasiswa  
- Cari mahasiswa secara _real-time_ menggunakan AJAX  

📚 **Fitur Pengelolaan Nilai**
- Input nilai berdasarkan mata kuliah  
- Validasi nilai otomatis (0.00 – 4.00)  
- Konversi nilai angka ke huruf (A–E)  
- Edit dan hapus nilai mahasiswa  
- Validasi input (mata kuliah hanya huruf & spasi, SKS 1–4)  

🔍 **Fitur AJAX**
- Pencarian data mahasiswa tanpa reload halaman  
- Data ditampilkan menggunakan respon JSON dari PHP  

🎨 **Tampilan (UI/UX)**
- Menggunakan tema **pastel coklat elegan**  
- Desain responsif dan rapi untuk desktop maupun mobile  
- Gaya visual konsisten antarhalaman (index, tambah, edit, nilai)

---

## 🗃️ Struktur Database
### Database: `db_kampus`
<img width="345" height="202" alt="image" src="https://github.com/user-attachments/assets/3df325a9-c610-4bc4-a009-53254aaee68e" />

#### Tabel: `mahasiswa`
<img width="1525" height="453" alt="image" src="https://github.com/user-attachments/assets/29ad274f-aa60-4d36-a06e-ea30edaffd73" />

#### Tabel: `nilai`
<img width="1518" height="540" alt="image" src="https://github.com/user-attachments/assets/7f147de4-cfcf-4292-8214-2c92be47ec2a" />

---

## 🧠 Logika Validasi
### 💡 Validasi Data Mahasiswa
- NIM minimal 5 karakter  
- Nama dan Prodi tidak boleh kosong  

### 💡 Validasi Nilai
- Mata kuliah hanya boleh huruf dan spasi (tanpa angka/simbol)  
- SKS harus antara 1–4  
- Nilai angka harus antara 0.00–4.00  

Nilai angka secara otomatis dikonversi menjadi huruf:
| Rentang Nilai  | Nilai Huruf |
|----------------|-------------|
| ≥ 3.75         |       A     |
| ≥ 3.00         |       B     |
| ≥ 2.00         |       C     |
| ≥ 1.00         |       D     |
| < 1.00         |       E     |

---

## ⚡ Cara Menjalankan
1. Simpan project di: C:\xampp\htdocs\ProgNet\Tugas3_PHP  
2. Jalankan Apache dan MySQL di XAMPP.  
3. Buat database dengan nama db_kampus.  
4. Jalankan di browser: http://localhost/ProgNet/Tugas3_PHP/index.php  

---

## 🖥️ Teknologi yang Digunakan
- **Frontend:** HTML5, CSS3, JavaScript (AJAX Fetch API)  
- **Backend:** PHP 8  
- **Database:** MySQL  
- **Format Data:** JSON  
- **Tema:** Pastel Coklat Elegan  

---

# 🖼️ Cuplikan Tampilan 
## Halaman Utama
<img width="1919" height="953" alt="image" src="https://github.com/user-attachments/assets/540414db-a43b-4a8b-a02f-bddb4b6fc9b8" />

## Cari Mahasiswa
1. Berdasarkan Nama
<img width="1919" height="952" alt="image" src="https://github.com/user-attachments/assets/65cdd019-724e-4e64-997c-06b172f9cd4a" />

2. Berdasarkan NIM
<img width="1919" height="951" alt="image" src="https://github.com/user-attachments/assets/274aa33f-710d-46ee-8245-82b96e9d2d8c" />

3. Berdasarkan Prodi
<img width="1919" height="949" alt="image" src="https://github.com/user-attachments/assets/ecbb441f-c421-47df-b446-b918aa9e894c" />

## Tambah Mahasiswa
1. Masukkan Data Mahasiswa
<img width="1872" height="949" alt="image" src="https://github.com/user-attachments/assets/fc952406-94c5-418e-b854-4a82befa1f03" />

2. Data Berhasil Disimpan
<img width="1919" height="942" alt="image" src="https://github.com/user-attachments/assets/84b4b372-3c48-40ec-b5b8-f4e753550761" />

3. Validasi Ketika Data Kosong
<img width="1866" height="943" alt="image" src="https://github.com/user-attachments/assets/3cf6302c-b561-49da-ac5d-50e890ed6f85" />

4. Validasi Ketika NIM < 5 Karakter & NIM Harus Angka
<img width="1868" height="947" alt="image" src="https://github.com/user-attachments/assets/9b69bc45-8268-40d6-8361-a07e03ad6c6e" />

5. Validasi Ketika Nama dan Prodi Kosong
<img width="1884" height="945" alt="image" src="https://github.com/user-attachments/assets/f7028755-a236-4eff-be69-56c16558d6df" />

## Edit Data Mahasiswa
1. Ubah NIM Mahasiswa
<img width="1907" height="845" alt="image" src="https://github.com/user-attachments/assets/99f507f0-f21f-4a27-99bf-3782a52f7088" />

2. Simpan Perubahan
<img width="1919" height="944" alt="image" src="https://github.com/user-attachments/assets/629b493b-c1cb-472f-8291-4627573dfc10" />

3. Hasil Perubahan
<img width="1882" height="951" alt="image" src="https://github.com/user-attachments/assets/6ee6a27f-2346-4263-8072-8ac297887762" />

4. Validasi Apabila Ingin Memasukkan Selain Angka Pada NIM
<img width="1919" height="951" alt="image" src="https://github.com/user-attachments/assets/455d7d93-af94-413f-bde0-5f866d5519bf" />

## Daftar Nilai
1. Tampilan Daftar Nilai
<img width="1919" height="947" alt="image" src="https://github.com/user-attachments/assets/170a1173-6edb-45c1-bff6-579d27c402a6" />

2. Tambah Daftar Nilai
<img width="1877" height="855" alt="image" src="https://github.com/user-attachments/assets/b3bdefbb-366f-4d93-9a87-1615a3b9c5cf" />

3. Berhasil Disimpan
<img width="1919" height="953" alt="image" src="https://github.com/user-attachments/assets/4051b627-311c-48c9-8764-bfa40eeff514" />

4. Hasil Daftar Nilai
<img width="1919" height="947" alt="image" src="https://github.com/user-attachments/assets/ccdf720b-aff5-4ff0-8adb-411ed92a2c63" />

5. Validasi Apabila Nama MatKul Bukan Hanya Huruf
<img width="1867" height="843" alt="image" src="https://github.com/user-attachments/assets/2ed8eb8f-fff5-46ce-802b-6ab8d1f05540" />

6. Validasi Apabila SKS Lebih Dari 4
<img width="1876" height="854" alt="image" src="https://github.com/user-attachments/assets/d4ee0d90-065b-4fdc-90a9-1fd5f7b42e8d" />

7. Validasi Apabila Nilai > 4.00 & Nilai Harus Angka
<img width="1889" height="847" alt="image" src="https://github.com/user-attachments/assets/d86094bc-e30d-42eb-bc41-47a24cbd8ab5" />

## Edit Daftar Nilai
1. Ubah Nilai
<img width="1880" height="859" alt="image" src="https://github.com/user-attachments/assets/b4d32b1a-60c3-49e8-8714-8f66105f3c89" />

2. Berhasil Disimpan
<img width="1917" height="948" alt="image" src="https://github.com/user-attachments/assets/0ae0564a-1e22-4926-8e18-52af4f86b023" />

3. Tampilan Setelah Diubah
<img width="1913" height="846" alt="image" src="https://github.com/user-attachments/assets/73041258-c3f8-4f87-bb6b-06e97dbb087b" />

## Hapus Salah Satu Dartar Nilai
1. Pilih Mata Kuliah
<img width="1916" height="956" alt="image" src="https://github.com/user-attachments/assets/e2d95c49-2981-4b25-a268-756460aec3dc" />

2. Hapus Mata Kuliah
<img width="1919" height="949" alt="image" src="https://github.com/user-attachments/assets/4ae69e04-44b9-43f0-a29a-c54470f279cd" />

3. Nilai Mata Kuliah Berhasil Menghapus
<img width="1919" height="950" alt="image" src="https://github.com/user-attachments/assets/24e5206c-39be-45e1-a7f5-6845a30695e8" />

4. Tampilan Setelah Dihapus
<img width="1919" height="950" alt="image" src="https://github.com/user-attachments/assets/1f453221-e6c5-4090-a4b1-b2fe57b76d11" />

## Hapus Salah Satu Mahasiswa
1. Pilih Mahasiswa
<img width="1889" height="859" alt="image" src="https://github.com/user-attachments/assets/17d78f3b-1240-4fd9-80bd-90364a75bd03" />

2. Hapus Mahasiswa
<img width="1883" height="955" alt="image" src="https://github.com/user-attachments/assets/72e41842-c82e-49d0-93a6-7b6a4b117336" />

3. Mahasiswa Berhasil Dihapus
<img width="1919" height="955" alt="image" src="https://github.com/user-attachments/assets/c7c3f722-3ec2-4827-8736-8aefb7bc54e7" />

4. Tampilan Setelah Dihapus
<img width="1880" height="841" alt="image" src="https://github.com/user-attachments/assets/24326d7e-c056-4743-b29b-53116fcd3069" />

## Tampilan Pada phpMyAdmin
### Mahasiswa
1. Tampilan Awal
<img width="1527" height="848" alt="image" src="https://github.com/user-attachments/assets/0a10dcdf-bf1c-489e-9718-023d5f9800af" />

2. Setelah Ditambahkan Mahasiswa
<img width="1524" height="790" alt="image" src="https://github.com/user-attachments/assets/a0b52d4a-6a30-4a0d-86e5-5e969f8d0b3c" />

3. Setelah NIM Diubah
<img width="1522" height="777" alt="image" src="https://github.com/user-attachments/assets/ccaf0cb2-5463-4af2-b677-2f385148d87a" />

4. Setelah Dihapus
<img width="1523" height="844" alt="image" src="https://github.com/user-attachments/assets/0ee3022e-8bea-435c-b336-6ef49ec05f5f" />

### Nilai
1. Tampilan Awal
<img width="1525" height="647" alt="image" src="https://github.com/user-attachments/assets/90f3d559-a135-4768-825a-9a5cb6867d0a" />

2. Setelah Ditambahkan Nilai
<img width="1525" height="683" alt="image" src="https://github.com/user-attachments/assets/3eb74604-e6ba-461e-b5a1-cc389371f84b" />

3. Setelah Bobot Nilai Diubah
<img width="1524" height="702" alt="image" src="https://github.com/user-attachments/assets/2f9d6c3d-6478-4fc4-9830-21a0585ea13a" />

4. Setelah Dihapus
<img width="1527" height="696" alt="image" src="https://github.com/user-attachments/assets/7ea716b7-85ef-40ce-ac8b-90e7c0b16137" />

---

## 🧠 Pembelajaran yang Didapat
- Cara menghubungkan frontend dan backend menggunakan AJAX.
- Proses pertukaran data format JSON antara client dan server.
- Teknik validasi ganda (client & server).
- Pengelolaan database menggunakan PHP & MySQL.
- Mendesain tampilan web yang rapi, lembut, dan konsisten.

---

## 📝 Penutup
Tugas ini dibuat untuk memenuhi Praktikum Pemrograman Internet (PHP Lanjutan & AJAX), serta melatih kemampuan dalam:
- Mengimplementasikan CRUD berbasis database.
- Menggunakan AJAX untuk membuat web yang lebih interaktif.
- Mendesain UI yang harmonis dan mudah digunakan.
Dengan tugas ini, mahasiswa diharapkan mampu memahami alur kerja client–server asynchronous, serta menguasai dasar-dasar pengembangan web dinamis yang efisien dan menarik.

---
