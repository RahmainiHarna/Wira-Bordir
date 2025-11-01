# SISTEM PEMESANAN ONLINE WIRA BORDIR COMPUTER

Kelompok 6:
1.	**Ilma Mahmudah** - 241402003 - *Backend*
2.	**Rasyiqah Amalina Putri** - 241402024 - *Backend*
3.	**Nabila Putri Indriyatno** - 241402102 - *Backend*
4.	**Nazwa Sahara Harahap** - 2414020126 - *Frontend*
5.	**Rahmaini Harna** - 2414020132 - *Frontend*

# Description:
WIRA BORDIR COMPUTER, yang berlokasi di Tembung, kec. Percut sei Tuan, Kabupaten Deli Serdang, Sumatera Utara, Wira Bordir Computer, sebagai penyedia layanan bordir, menghadapi tantangan dalam mengelola pesanan pelanggan secara manual yang sering menimbulkan kesalahan pencatatan, keterlambatan proses, dan kesulitan dalam memantau status pesanan. Penelitian ini bertujuan mengembangkan sistem pemesanan online berbasis web untuk meningkatkan efisiensi dan efektivitas pengelolaan pesanan di Wira Bordir Computer.

Kebutuhan pengguna yang kami terapkan pada webiste wira bordir computer adalah sebagai berikut.
1.	**Admin**
- Admin dapat login ke dalam dashboard admin.
- Admin dapat mengelola data pesanan pelanggan seperti menambah, mengedit, dan menghapus.
- Admin dapat memantau status pesanan pelanggan.
- Admin dapat memberikan konfirmasi pembayaran pelanggan yang telah mengunggah bukti pembayaran.
- Admin dapat mengelola kategori layanan bordir serta mengubah harga sesuai kebijakan.
- Admin dapat melihat informasi pelanggan serta menonaktifkan akun
- bila diperlukan.

2.	**Owner**
- Pemilik dapat login ke dalam tampilan dashboard owner.
- Pemilik dapat melihat jumlah pesanan yang masuk, pesanan yang selesai, dan pelanggan aktif.
- Pemilik dapat melihat dan mengedit status aktif atau tidak aktif pengguna dan pegawai.
- Pemilik dapat melihat detail, menambahkan, dan mengedit data layanan bordir yang tersedia.
- Pemilik dapat melihat grafik penjualan selama sebulan terakhir.
- Pemilik dapat melihat dan mencetak laporan terkait pemasukan dan pengeluaran.
- Pemilik dapat memantau produk/jasa bordir terlaris berdasarkan data penjualan.
- Pemilik dapat memfilter dan melihat riwayat transaksi pelanggan berdasarkan tanggal dan status pembayaran.
- Pemilik dapat mengakses log aktivitas admin untuk memantau perubahan yang dilakukan di sistem.

3.	**User**
- User dapat  registrasi dan login ke dalam tampilan dashboard pengguna dengan menggunakan email yang valid.
- User dapat menggunakan fitur “Ingat Saya” untuk tetap login tanpa harus login ulang.
- User dapat menggunakan fitur lupa password untuk mengatur ulang password melalui verifikasi email.
- User dapat mengedit profil biodatanya, mengganti password dan menghapus akun.
- User dapat melihat daftar layanan bordir yang ditawarkan beserta deskripsi, harga, dan estimasi waktu pengerjaan.
- User dapat memilih layanan bordir dan melakukan pemesanan secara online.
- User dapat mengunggah desain, logo atau pola bordir untuk pesanan.
- User dapat melihat status pemesanan yang telah dilakukan.
- User dapat melihat riwayat transaksi pemesanan sebelumnya.
- User dapat melakukan pembatalan pesanan selama pesanan belum diproses.
# Tech Stack
1.	**Composer version 2.8.4** (Mengelola library dan dependency Laravel.)
2.	**Laravel v12.14.1** (Framework utama untuk membangun web dengan struktur MVC.)
3.	**PHP 8.3.16** (Bahasa pemrograman backend untuk menjalankan logika sistem.)
4.	**MYSQL  8.4.3** (Database untuk menyimpan dan mengelola data project.)
5.	**Laragon v8.2.3** (Server lokal untuk menjalankan Laravel dan database dengan mudah.)
6.	**HTML, CSS, dan JavaScript** (Membentuk tampilan dan interaksi pada halaman web (frontend) ).
# Installing
Clone Repository Github Project diset ke public
```bash
git clone https://github.com/RahmainiHarna/Wira-Bordir
```
Masuk ke folder project
```bash
cd Wira-Bordir
```
Install semua dependency Laravel
```bash
composer install
```
Salin file .env.example menjadi .env
```bash
copy .env.example .env
```
Generate application key
```bash
php artisan key:generate
```
Atur koneksi database di file .env
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Wira-Bordir
DB_USERNAME=root
DB_PASSWORD=
```
Jalankan migrasi database (opsional)
```bash
php artisan migrate
```
Jalankan server Laravel
```bash
Php artisan serve
```







  


 

