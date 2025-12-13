
# SISTEM PEMESANAN ONLINE WIRA BORDIR COMPUTER

Kelompok 6:
1.	**Ilma Mahmudah** - 241402003 - *Project Manager + Backend*
2.	**Rasyiqah Amalina Putri** - 241402024 - *Frontend*
4.	**Nazwa Sahara Harahap** - 2414020126 - *Frontend + Backend*
5.	**Rahmaini Harna** - 2414020132 - *Backend*

# Description:
WIRA BORDIR COMPUTER, yang berlokasi di Tembung, Kec. Percut Sei Tuan, Kabupaten Deli Serdang, Sumatera Utara. Wira Bordir Computer, sebagai penyedia layanan bordir, menghadapi tantangan dalam mengelola pesanan pelanggan secara manual yang sering menimbulkan kesalahan pencatatan, keterlambatan proses, dan kesulitan dalam memantau status pesanan. Penelitian ini bertujuan mengembangkan sistem pemesanan online berbasis web untuk meningkatkan efisiensi dan efektivitas pengelolaan pesanan di Wira Bordir Computer.

Kebutuhan pengguna yang kami terapkan pada webiste wira bordir computer adalah sebagai berikut.
1.	**Admin**
- Admin dapat login ke dalam dashboard admin.
- Admin dapat mengelola akun customer, tetapi tidak dapat mengelola detail akun owner dan admin.
- Admin dapat melihat ringkasan data produk, menambahkan produk baru, mencari dan memfilter produk berdasarkan status atau kata kunci, mengurutkan data produk, melihat detail produk, mengedit informasi produk, serta mengelola status produk aktif dan nonaktif. 
- Admin dapat melihat ringkasan status pesanan, membuat pesanan baru, memantau total pendapatan dan pembayaran, mencari dan memfilter pesanan berdasarkan status, tanggal, atau data pelanggan, melihat detail pesanan, serta mengelola status pesanan dari menunggu pembayaran hingga selesai atau dibatalkan.
- Admin dapat mengelola kategori layanan bordir serta mengubah harga sesuai kebijakan.
- Admin dapat mengelola manajeman gallery dengan menambahkan, mengedit, dan menghapus.

2.	**Owner**
- Pemilik dapat login ke dalam tampilan dashboard owner.
- Pemilik dapat melihat jumlah pesanan yang masuk, pesanan yang selesai, dan pelanggan aktif.
- Pemilik dapat melihat dan mengedit status aktif atau tidak aktif customer dan admin.
- Pemilik dapat melihat detail, menambahkan, dan mengedit data layanan bordir yang tersedia.
- Pemilik dapat melihat grafik penjualan selama sebulan terakhir.
- Pemilik dapat melihat dan mencetak laporan terkait pemasukan dan pengeluaran.
- Pemilik dapat memantau produk/jasa bordir terlaris berdasarkan data penjualan.
- Pemilik dapat memfilter dan melihat riwayat transaksi pelanggan berdasarkan tanggal dan status pembayaran.
- Pemilik dapat mengakses log aktivitas admin untuk memantau perubahan yang dilakukan di sistem.
- Pemilik dapat mengelola kategori layanan bordir.

3.	**Customer**
- Customer dapat  registrasi dan login ke dalam tampilan dashboard pengguna dengan menggunakan email yang valid.
- Costumer dapat melihat daftar layanan bordir yang ditawarkan beserta deskripsi, harga, dan estimasi waktu pengerjaan.
- Customer dapat melihat dokumetasi hasil bordir dari halaman galeri website.
- Customer dapat memilih layanan bordir dan melakukan pemesanan secara online.
- Customer dapat mengunggah desain, logo atau pola bordir untuk pesanan.
- Customer dapat melihat status pemesanan yang telah dilakukan. 
- Customer dapat melihat riwayat transaksi pemesanan sebelumnya.
- Customer dapat melakukan pembatalan pesanan selama pesanan belum dibayar.

# Tech Stack
1.	**Composer version 2.8.4** (Mengelola library dan dependency Laravel.)
2.	**Laravel v12.14.1** (Framework utama untuk membangun web dengan struktur MVC.)
3.	**PHP 8.3.16** (Bahasa pemrograman backend untuk menjalankan logika sistem.)
4.	**MYSQL  8.4.3** (Database untuk menyimpan dan mengelola data project.)
5.	**Laragon v8.2.3** (Server lokal untuk menjalankan Laravel dan database dengan mudah.)
6.	**HTML, CSS, dan JavaScript** (Membentuk tampilan dan interaksi pada halaman web (frontend)).

# Installing
Clone Repository Github Project diset ke public
```bash
git clone https://github.com/RahmainiHarna/Wira-Bordir.git
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




