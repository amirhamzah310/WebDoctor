# WebDoctor
Program ini merupakan gabungan proyek akhir mata kuliah Manajemen Informasi dan Basis Data serta mata kuliah Pemrograman Berbasis Web

# Latar Belakang
Saat ini, kemajuan teknologi banyak digunakan di berbagai bidang, khususnya di bidang kesehatan. Teknologi tersebut digunakan untuk mempermudah masyarakat dalam melakukan kegiatan sehari-hari sehingga lebih efisien. Salah satu penerapan kemajuan teknologi tersebut adalah untuk membantu masyarakat dalam mengetahui jenis penyakit yang mungkin diidapnya berdasarkan gejala-gejala yang dialami. Sebagai implementasi untuk memenuhi kebutuhan tersebut, dibuatlah sebuah situs web yang berfungsi untuk melakukan diagnosa terhadap gejala-gejala dan memberikan kemungkinan penyakit berdasarkan gejala – gejala yang dipilih, yaitu situs WebDoctor.

# Spesifikasi Program

Website ini berfungsi untuk membantu membernya dalam melakukan diagnosis penyakitnya secara sederhana. 

Gambaran Alur penggunaan program (secara sederhana, alur lengkap dijelaskan di bawah):

    a. Pengguna mencari dan memilih gejala-gejala yang dia alami
    
    b. Website ini menampilkan penyakit-penyakit yang memiliki gejala sesuai dengan yang dialami pengguna tersebut.

Asumsi :

    a. Sebuah penyakit dapat memiliki beberapa gejala
    
    b. Seorang pasien dianggap mungkin memiliki penyakit tersebut bila ia memiliki seluruh gejala tersebut
    
    c. Sebuah gejala dapat muncul di beberapa penyakit.
    
    d. Bisa ada lebih dari satu penyakit dengan gejala yang persis sama

Fitur diagnosis ini hanya dapat dijalankan oleh member dari website ini. Website ini mencatat data-data standar untuk tiap member seperti tanggal lahir, kota tempat tinggal, dan lain-lain

Ilustrasi asumsi: 

    a. Penyakit: Pneumonia. Gejala : Batuk, Demam, Lemas
    
    b. Penyakit: Asma. Gejala : Batuk, Keringat Dingin

Gejala “Batuk” muncul di kedua penyakit. 

Pengguna website ini dibagi menjadi dua jenis, yaitu admin dan member biasa. Fitur-fitur untuk tiap tipe pengguna adalah :

Admin

    a. Dapat menambah penyakit baru dan memasukkannya ke dalam suatu kategori.
    
    b. Dapat menambah gejala baru.
    
    c. Dapat menyambungkan hubungan gejala dan penyakit.
    
    d. Dapat membuat laporan-laporan yang berkaitan seperti mencari penyakit yang paling sering muncul di suatu kota atau penyakit yang paling sering muncul di tahun 2018, dsb.

Member Biasa

    a. Dapat mendaftar sebagai member
    
    b. Dapat memulai proses diagnosis 
    
    c. Mencari dan memilih gejala-gejala yang ia alami
    
    d. Melihat kemungkinan-kemungkinan penyakit yang ia alami
    
    e. Melihat gejala-gejala penyakit yang pernah ia alami pada suatu range tanggal tertentu serta klasifikasi penyakitnya

# Keunggulan Program
    1. Arsitektur backend yang digunakan adalah M-V-C (Model-View-Controller)

    2. Terdapat company profile yang menampilkan halaman utama, slideshow, profil, visi, dan misi perusahaan
    
    3. Terdapat halaman register dan login untuk mengakses fitur-tertentu. Data akun dapat di manage (ganti password, delete akun) melalui sebuah halaman manajemen akun.
    
    4. Sudah mengimplementasi operasi database CRUD (Create, Read, Update, Delete). 
    
    5. Terdapat fitur search dan pagination. 
    
    6. Dapat mengupload file profile picture dan menampilkan pada profile pengguna
    
    7. Dapat membuat laporan dan dapat diunduh dalam bentuk PDF. 
    
    8. Sudah mengimplementasikan AJAX pada bagian cek username dan live search
# Struktur Program
## Folder WebDoctor
    • Controller --> berisi file – file untuk menerima input user dan mengembalikan hasil proses kepada user.
    
    • Database --> berisi file sql yang digunakan untuk membuat basis data webdoctor
    
    • Model --> berisi file-file untuk menginisialisasi tabel-tabel pada database
    
    • vendor --> berisi library m-pdf yang digunakan untuk melakukan unduh pdf
    
    • View --> berisi file-file tampilan user
    
    • .htaccess --> mengarahkan website agar di handle terlebih dahulu ke router.php
    
    • cetak.php --> membuat pdf
    
    • index.php --> melakukan redirect url ke halaman login
    
    • router.php --> meng handle halaman url, menerima input user dan menyalurkan pada controller serta sebaliknya

## Folder Controller
    • aboutController.php --> membuat halaman company profile
    
    • adminController.php --> mengatur halaman home admin (menampilkan semua daftar penyakit, gejala, kategori dengan teknik pagination)
    
    • fileController.php --> mengatur penyimpanan upload file (menyimpan hanya nama file pada basis data)
    
    • gejalaController.php --> mengatur semua yang berhubungan dengan gejala
    
    • homeController.php --> mengatur halaman home user
    
    • kategoriController.php --> mengatur semua yang berhubungan dengan kategori penyakit
    
    • loginController.php --> mengatur semua yang berhubungan dengan data user
    
    • mysqlDB.php --> menjalankan query sql (berbasis OOP)
    
    • penyakitController.php --> mengatur semua yang berhubungan dengan penyakit
    
    • profileController.php --> membuat halaman profil user
    
    • riwayatController.php --> membuat halaman riwayat penyakit user
    
    • searchController.php --> mencari record berdasarkan input user (menggunakan ajax)
    
    • signUpController.php --> membuat halaman signUp dan mengatur hal yang berhubungan dengan tambah akun
    
    • updateController.php --> melakukan update terhadap  gejala dan penyakit yang berhubungan
    
    • usernameController.php --> mengecek apakah username masih tersedia atau tidak (menggunakan ajax)
    
## Folder Model
    • admin.php --> menghandle data admin
    
    • gejala.php --> menginisialisasi tabel gejala
    
    • kategori.php --> menginisialisasi tabel kategori
    
    • login.php --> meng handle data login
    
    • penyakit.php --> menginisialisasi tabel penyakit
    
    • riwayat.php --> menginisialisasi riwayat penyakit user
    
    • signup.php --> meng handle data akun user baru
    
## Folder View
    • folder Layout --> berisi file-file layout untuk login, admin, dan user. 
    
    • folder Script --> berisi file – file javascript dan ajax.
    
    • folder Style --> berisi file untuk mengatur tampilan
    
    • about.php --> berisi tampilan company profile pada halaman user
    
    • addGejala.php --> berisi tampilan untuk menambahkan gejala pada halaman admin
    
    • addKategori.php --> berisi tampilan untuk menambahkan kategori penyakit pada halaman admin
    
    • addPenyakit.php --> berisi tampilan untuk menambahkan penyakit pada halaman admin
    
    • admin.php --> berisi tampilan awal admin
    
    • forgot.php --> berisi tampilan untuk mengganti password user
    
    • gejala.php --> berisi tampilan untuk memilih gejala pada halaman user
    
    • gejala1.php --> berisi tampilan untuk mendiagnosis pada halaman user
    
    • Gejalaa.php --> berisi tampilan untuk menampilkan tabel gejala pada halaman admin
    
    • home.php --> berisi tampilan awal user
    
    • kategori.php --> berisi tampilan untuk menampilkan tabel kategori pada halaman  admin
    
    • login.php --> berisi tampilan halaman login user maupun admin
    
    • penyakit.php --> berisi tampilan untuk menampilkan tabel penyakit pada halaman admin
    
    • profile.php --> berisi tampilan profil pengguna pada halaman user
    
    • riwayat.php --> berisi tampilan untuk menampilkan riwayat penyakit pada halaman user
    
    • signUp.php --> berisi tampilan untuk membuat akun baru untuk user
    
    • updateHubungan.php --> berisi tampilan untuk menghubungkan gejala dan  penyakit pada halaman admin

    • view.php --> file yang berfungsi untuk menggabungkan antara layout dengan konten
    
    • wronglogin.php --> berisi tampilan apabila user/admin salah memasukkan username / password
    
## Folder Layout
    • layout --> berisi layout untuk halaman login.php, signup.php, wronglogin.php, dan forgot.php
    
    • layoutAdmin --> berisi layout untuk halaman admin
    
    • layoutHomepage --> berisi layout untuk halaman user
    
## Folder Script
    • script.js --> berisi validasi untuk halaman user
    
    • scriptajax.js --> berisi validasi apakah username sudah ada yang memakai atau belum
    
    • search.js --> file javascript yang berfungsi untuk mencari suatu record tertentu pada halaman admin
    
    • SignUp.js --> berisi kelas signUp untuk melakukan validasi pada halaman signUp
    
## Folder Style
    • fontawesome-free-5.8.1-web --> berisi library untuk memasukkan icon pada website
    
    • Images --> folder yang berisi gambar yang digunakan pada slideshow website
    
    • uploads --> folder yang berfungsi untuk menyimpan gambar

# Alur Program dan Penjelasan
Bagi Admin:

    1. Melakukan log in dengan memasukkan username dan password
    
    2. Setelah log in, admin akan masuk ke halaman homepage admin. Homepage admin akan menampilkan tabel daftar penyakit gejala kategori. Dalam halaman tersebut juga terdapat 4 fitur untuk menambah penyakit, menambah gejala, menambah kategori, serta mengupdate hubungan gejala dengan penyakit.
    
    3. Jika masuk ke halaman penyakit, maka terdapat tombol untuk menambahkan penyakit dan tombol kembali untuk pegi ke halaman homepage admin.
    
    4. Jika masuk ke halaman gejala, maka terdapat tombol untuk menambahkan gejala dan tombol kembali untuk pegi ke halaman homepage admin.
    
    5. Jika masuk ke halaman kategori, maka terdapat tombol untuk menambahkan kategori dan tombol kembali untuk pegi ke halaman homepage admin.
    
    6. Jika masuk ke halaman update, maka terdapat dropdown untuk memilih nama gejala dan dropdown untuk memilih penyakit. Kemudian terdapat tombol submit untuk menghubungkannya serta tombol kembali untuk pegi ke halaman homepage admin.
    
    7. Setelah selesai admin dapat melakukan logout dengan memilihi fitur logout.

Bagi Pengguna:
    
    1. Melakukan sign up terlebih daulu. Halaman sign up akan berisi form yang meminta Nama, Tanggal Lahir, Alamat, Kota, Username, Email, dan Password.
    
    2. Melakukan login jika sudah membuat akun dengan memasukkan username dan password. Kemudian akan masuk ke halaman homepage untuk pengguna. Dalam halaman tersebut terdapat dropdown untuk memilih keluhan pengguna. Setelah itu pengguna dapat menekan tombol mulai untuk memulai proses diagnosis penyakit dan akan diarahkan ke halaman gejala.
    
    3. Halaman gejala terdapat beberapa gejala yang dapat dipilih oleh pengguna dengan memilih checkbox yang tepat berada di sebelah gejalanya. Selanjutnya pengguna dapat menekan tombol mulai untuk melihat penyakit dan kemungkinan beberapa penyakit lainnya.
    
    4. Setelah selesai melakukan proses diagnosis pengguna dapat melakukan logout dengan memilih fitur logout.

# Penjelasan Basis Data (Source Code ada pada Folder Database)

Entitas Penyakit memiliki atribut: 

    ◦ kodePenyakit(PK) --> sebagai primary key di tabel Penyakit yang berfungsi sebagai penanda dari banyaknya penyakit yang dimasukkan ke basisdata.
    
    ◦ namaPenyakit --> menyimpan nama dari setiap penyakit.

Entitas Kategori memiliki atribut: 

    ◦ idKategori(PK) --> sebagai primary key di tabel Kategori yang berfungsi sebagai penanda dari banyaknya kategori yang dimasukkan ke basisdata.
    
    ◦ namaKategori --> menyimpan nama dari setiap kategori penyakit.

Entitas Memiliki mempunyai atribut: 

    ◦ kodePenyakit(FK) --> kodePenyakit dibutuhkan sebagai foreign key ke tabel Penyakit 
    
    ◦ idKategori(FK) --> idKategori dibutuhkan sebagai foreign key ke tabel Kategori

Entitas Member mempunyai atribut:

    ◦ username(PK) --> sebagai primary key di tabel Member yang berisikan username untuk login. Username terdiri dari string dengan panjang minimal 6 karakter dan maksimal 12 karakter. Username bersifat unik. 
    
    ◦ namaMember --> menyimpan nama dari setiap member yang terdaftar. 
    
    ◦ tglLahir --> menyimpan tanggal lahir dari setiap member yang terdaftar.
    
    ◦ kota(FK) --> menyimpan nama kota tempat tinggal member yang terdaftar.
    
    ◦ alamat --> menyimpan alamat dari setiap member yang terdaftar.
    
    ◦ email --> menyimpan email dari setiap member yang terdaftar.
    
    ◦ profil --> menyimpan nama file foto yang diunggah member.
    
    ◦ tglGabung --> menyimpan tanggal saat member mendaftar.
    
    ◦ kataSandi --> kataSandi terdiri dari string dengan panjang minimal 8 karakter.
    
    ◦ peran --> terdiri dari satu buah angka dengan angka 1 untuk admin dan 0 untuk member.

Entitas Diagnosa memiliki atribut: 

    ◦ kodePenyakit(FK) --> kodePenyakit dibutuhkan sebagai foreign key ke tabel Penyakit. 

    ◦ waktu --> menyimpan waktu saat member didiagnosis suatu penyakit.

    ◦ username(FK) --> username dibutuhkan sebagai foreign key ke tabel Member.

Entitas Gejala memiliki atribut: 
    
    ◦ kodeGejala(PK) --> sebagai primary key di tabel Gejala yang berfungsi sebagai penanda dari banyaknya gejala yang dimasukkan ke basisdata.
    
    ◦ namaGejala --> menyimpan nama dari setiap gejala.

Entitas Hubungan memiliki atribut:
        
    ◦ kodePenyakit(FK) --> kodePenyakit dibutuhkan sebagai foreign key ke tabel Penyakit

    ◦ kodeGejala(FK) --> kodeGejala dibutuhkan sebagai foreign key ke tabel Gejala.

Entitas Punya memiliki atribut: 

    ◦ username(FK)  --> username dibutuhkan sebagai foreign key ke tabel Member.
    
    ◦ kodeGejala(FK) --> kodeGejala dibutuhkan sebagai foreign key ke tabel Gejala.

Entitas Kota memiliki atribut:
    
    ◦ namaKota(PK) --> sebagai primary key di tabel Kota dan menyimpan nama kota. 
    
    ◦ idKota --> Berisikan id dari setiap nama kota.

Entitas Tinggal memiliki atribut: 
    
    ◦ username(FK) --> username dibutuhkan sebagai foreign key ke tabel Member.
    
    ◦ namaKota(FK) --> namaKota dibutuhkan sebagai foreign key ke tabel Kota.
    
# Hubungan Antar Entitas
    1. Hubungan kardinalitas entitas Penyakit dengan Member adalah many to many karena 1 penyakit dapat dimiliki oleh beberapa member dan 1 member dapat memiliki beberapa penyakit
    
    2. Hubungan kardinalitas entitas Penyakit dengan Gejala adalah many to many karena 1 penyakit dapat memiliki beberapa gejala dan 1 gejala dapat dimiliki oleh beberapa penyakit 
    
    3. Hubungan kardinalitas entitas Penyakit dengan Kategori adalah one to many di mana penyakit hanya memiliki 1 kategori, sedangkan 1 kategori dapat dimiliki oleh beberapa penyakit
    
    4. Hubungan kardinalitas entitas Member dengan Kota adalah one to many di mana member tinggal di satu kota dan di satu kota bisa terdapat beberapa member.
    
    5. Hubungan kardinalitas entitas Member dengan Gejala adalah many to many karena 1 member dapat memiliki beberapa gejala dan 1 gejala dapat dimilki oleh beberapa member

# Pembahasan dan Evaluasi

Program WebDoctor sudah dibuat dengan fitur yang baik. Program ini berhasil mencakup beberapa aspek sehingga memudahkan pengguna untuk mendiagnosa penyakitnya sendiri tanpa harus berkonsultasi dengan dokter terlebih dahulu. Program WebDoctor sudah dibuat sedemikian rupa agar pengguna mudah untuk mengoperasikannya. Adapun fitur yang belum berjalan dari rancangan awal adalah fitur admin untuk membuat laporan-laporan yang berkaitan seperti mencari penyakit yang paling sering muncul di suatu kota atau penyakit yang paling sering muncul di tahun 2018, dsb. Fitur cetak laporan yang dapat digunakan admin sampai saat ini hanya sampai mencetak tabel gejala, penyakit beserta kategori penyakitnya dan dapat diunduh dengan format pdf. Program ini masih dapat dikembangkan seperti setelah user didiagnosa penyakit, terdapat saran-saran pengobatan mandiri terkait penyakit yang diderita. Selanjutnya, apabila ingin lebih mengetahui tentang penyakit tersebut, user dapat melakukan konsultasi online dengan dokter yang ada serta dapat mengupload file berupa resep dokter ataupun membeli obat-obatan umum yang dapat diantarkan ke alamat tujuan. Secara keseluruhan, program ini masih memiliki kekurangan yaitu, apabila user memiliki gejala lebih dari satu, tabel riwayat penyakit agak sulit untuk dilihat karena informasi yang berbeda hanya dari gejala nya saja sedangkan tanggal dan penyakitnya sama yang muncul beberapa record.
