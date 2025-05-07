# Bookshelf - App Mini CRUD (PHP)
Bookshelf adalah sebuah aplikasi mini crud tentang catatan buku yang dibaca oleh pengguna.   

Pada aplikasi ini style mysqli yang digunakan ialah object-oriented. Pada [config/Database.php](https://github.com/ArielGwd/tugas1-pemrograman-web2/blob/main/config/Database.php) di baris [[13](https://github.com/ArielGwd/tugas1-pemrograman-web2/blob/72b1c8c8d7a404a47a7374d0dcbf182c6ecbb305/config/Database.php#L13)] terdapat pemanggilan `new mysqli()` yang berfungsi untuk membuka koneksi ke database MySQL. Kemudian pada [Requests/BookRequest.php](Requests/BookRequest.php) di baris [[29](https://github.com/ArielGwd/Tugas1_PemrogramanWeb2_ArielGemaWardana_230401010057/blob/0958dff9c39bfa57eb4302a0ff5a4051fdb51bbc/Requests/BookRequest.php#L29)] dan [Requests/BookRequest.php](Requests/CategoryRequest.php) di baris [[16](https://github.com/ArielGwd/Tugas1_PemrogramanWeb2_ArielGemaWardana_230401010057/blob/0958dff9c39bfa57eb4302a0ff5a4051fdb51bbc/Requests/CategoryRequest.php#L16)] terdapat penggunaan prepared statement MySQLi (object style) melalui metode `prepare()` yang menyediakan fitur keamanan untuk perintah yang memodifikasi isi tabel seperti `INSERT` atau `UPDATE`. kemudian berikutnya, pada [Requests/BookRequest.php](Requests/BookRequest.php) di baris [[30](https://github.com/ArielGwd/Tugas1_PemrogramanWeb2_ArielGemaWardana_230401010057/blob/0958dff9c39bfa57eb4302a0ff5a4051fdb51bbc/Requests/BookRequest.php#L30)] dan [Requests/BookRequest.php](Requests/CategoryRequest.php) di baris [[17](https://github.com/ArielGwd/Tugas1_PemrogramanWeb2_ArielGemaWardana_230401010057/blob/0958dff9c39bfa57eb4302a0ff5a4051fdb51bbc/Requests/CategoryRequest.php#L17)] terdapat bind parameter `bind_param()` yang mengikat variabel PHP ke placeholder `?` dalam SQL pada baris sebelumnya dan sekaligus mendefinisikan tipe data setiap parameter misalnya `sssssis`.

## Daftar isi
- [Daftar isi](https://github.com/ArielGwd/Tugas1_PemrogramanWeb2_ArielGemaWardana_230401010057#daftar-isi)
- [Persiapan](https://github.com/ArielGwd/Tugas1_PemrogramanWeb2_ArielGemaWardana_230401010057#persiapan)
  - [Clone Repository](https://github.com/ArielGwd/Tugas1_PemrogramanWeb2_ArielGemaWardana_230401010057#--clone-repository)
  - [Install Dependency](https://github.com/ArielGwd/Tugas1_PemrogramanWeb2_ArielGemaWardana_230401010057#--install-dependency)
- [Alur Kerja Aplikasi](https://github.com/ArielGwd/Tugas1_PemrogramanWeb2_ArielGemaWardana_230401010057#alur-kerja-aplikasi)
- [Fitur](https://github.com/ArielGwd/Tugas1_PemrogramanWeb2_ArielGemaWardana_230401010057#fitur)
- [Tech stack](https://github.com/ArielGwd/Tugas1_PemrogramanWeb2_ArielGemaWardana_230401010057#tech-stack)
- [Struktur Database](https://github.com/ArielGwd/Tugas1_PemrogramanWeb2_ArielGemaWardana_230401010057/#struktur-database)
- [Preview](https://github.com/ArielGwd/Tugas1_PemrogramanWeb2_ArielGemaWardana_230401010057/#preview)

## Persiapan 
1. Node.js v20.18.2 ([ Node.js](https://nodejs.org/en/download)) 
2. PHP 8.0+ atau 8.3.8 (([xampp](https://www.apachefriends.org/download.html) atau [laragon](https://laragon.org/download/)))
3. MySQL atau MariaDB 
4. GIT (Opsional)

### - Clone Repository   
1. Buka file manager / Finder / file explorer
2. Kemudian masuk ke folder tempat `xampp\htdocs` (XAMPP) atau `laragon\www` (Laragon)
3. Lalu klik kanan pada area kosong lalu pilih `Open in Terminal` atau pilih `git bash`
4. Kemudian, jalankan perintah dibawah ini :
```bash
git clone https://github.com/ArielGwd/Tugas1_PemrogramanWeb2_ArielGemaWardana_230401010057.git
cd Tugas1_PemrogramanWeb2_ArielGemaWardana_230401010057 
```  

kemudian ke browser buka `http://localhost/tugas1-pemrograman-web2/`

### - Install Dependency
jika node_modules dan css tidak ada atau beberapa fungsi tidak bisa digunakan, jalankan perintah dibawah ini :
```bash
npm install
npm run build
``` 

kemudian buka browser kembali `http://localhost/tugas1-pemrograman-web2/`. Setelah itu, cek kembali apakah bisa digunakan tombol-tombol dan beberapa fungsi lainnya

## Alur Kerja Aplikasi
Aplikasi memiliki menu yaitu dashboard, buku, dan kategori. masing-masing memiliki alurnya sendiri yaitu :
- Halaman `Dashboard` : Menampilkan halaman awal.
- Halaman `Buku` : Menampilkan data `books` dari database.
- Halaman `Kategori` : Menampilkan data `categories` dari database.

Pada menu atau halaman [Buku](books/main.php) dan [Kategori](categories/main.php) terdapat Input `CREATE` atau `UPDATE` :
- proses input (`CREATE`) yaitu terdapat button atau tombol tambah, dan ketika diklik akan menampilkan pop up kemudian user dapat mengisi form yang ada di pop up tersebut. hasil dari input tersebut akan dikirim dan diproses ke [Requests/BookRequest.php](Requests/BookRequest.php) untuk buku atau [Requests/CategoryRequest.php](Requests/CategoryRequest.php) untuk kategori melalui GET parameter yaitu `?action=add` dan dengan method POST. Jika prosesnya berhasil maka akan dikembalikan ke halaman Buku atau Kategori. 
- proses input (`UPDATE`) yaitu sama seperti proses input (`CREATE`) namun yang membedakan ialah value dari GET parameternya saja yaitu `?action=update`

Selain itu juga menu atau halaman [Buku](books/main.php) dan [Kategori](categories/main.php) terdapat `DELETE` pada button atau tombol berwarna merah di menu atau halaman Buku dan Kategori. Button tersebut dapat diklik dan akan menampilkan sebuah modal atau pop up yaitu peringatan apakah user ingin menghapus data tersebut atau tidak. jika iya maka akan diproses ke [Requests/BookRequest.php](Requests/BookRequest.php) untuk buku atau [Requests/CategoryRequest.php](Requests/CategoryRequest.php) untuk kategori melalui GET parameter yaitu `?action=delete`. Jika prosesnya berhasil maka akan dikembalikan ke halaman Buku atau Kategori. 

## Fitur
- Create
- Read
- Update
- Delete
- Search ([datatables library](https://datatables.net/))
- Pagination ([datatables library](https://datatables.net/))

## Tech stack
[![Tech](https://skillicons.dev/icons?i=tailwind,php,mysql,js,npm&perline=6)](https://skillicons.dev)
  
## Struktur Database
struktur database [SQL](tugas_web2_arielgema.sql) atau [Gambar](assets/img/preview/database.png) atau dibawah ini
```bash
Database: tugas_web2_arielgema 

-- table: 
books : {
    kd_buku varchar(225) NOT NULL PRIMARY KEY,
    title varchar(225) NOT NULL, 
    author varchar(225) NOT NULL, 
    year_published date NOT NULL,
    progress enum('selesai','proses','belum') NOT NULL,
    category_id int NOT NULL INDEX,
    description text
}

categories: {
    id int NOT NULL PRIMARY KEY,
    name varchar(225) NOT NULL
} 
``` 

## Preview  
1. Dashboard
![Dashboard Page](assets/img/preview/dashboard.png)
 
2. Book Page
![Dashboard Page](assets/img/preview/buku.png)

3. Add Book Modal
![Dashboard Page](assets/img/preview/tambah-buku.png)

4. Edit Book Modal
![Dashboard Page](assets/img/preview/ubah-buku.png)

5. Category Page
![Dashboard Page](assets/img/preview/kategori.png)

6. Add Category Modal
![Dashboard Page](assets/img/preview/tambah-kategori.png)

7. Edit Category Modal
![Dashboard Page](assets/img/preview/ubah-kategori.png)
