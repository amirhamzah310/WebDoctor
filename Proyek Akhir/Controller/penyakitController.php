<?php
    require_once "view/view.php";
    require_once "mysqlDB.php";

    class PenyakitController{
        protected $db;

        public function __construct(){
            $this->db = new mysqlDB("localhost","root","","webdoctor");
        }

        public function diagnose(){
            //di halaman view yg baru perlu: 
            session_start();
            $nama = $_SESSION['userlogin']; //nama
            $kategori = $_SESSION['kateg']; //kategori //optional
            session_write_close();
            $query = "SELECT `namaGejala` FROM `Gejala`";
            $res = $this->db->executeSelectQuery($query); //tampilkan gejala2 yang ada di db
            $query = "SELECT `profil` FROM `member` WHERE `namaMember`='$nama'";
            $profil = $this->db->executeSelectQuery($query); //gambar profil user tsb
            $query = "SELECT `kodeGejala` FROM `gejala` WHERE `namaGejala`=";
            $jumlah = count($_GET['gejala']); //menghitung jumlah value yang dicentang
            for($i=0; $i<$jumlah; $i++){
                $a=$_GET['gejala'][$i];
                $query.="'$a'";
                if($i!=$jumlah-1){
                    $query.=" OR `namaGejala`=";
                }
            }
            $gejala = $this->db->executeSelectQuery($query); //ngambil semua kode gejala dari semua nama gejala yang diinput
            $query = "SELECT DISTINCT(`namaPenyakit`),`idKategori`,`penyakit`.`kodePenyakit` FROM (SELECT `kodePenyakit` FROM `hubungan` WHERE `kodeGejala`=";
            for($i=0; $i<$jumlah; $i++){
                $a = $gejala[$i][0];
                $query.="$a";
                if($i!=$jumlah-1){
                    $query.=" OR `kodeGejala`=";
                }
            }
            $query.=")AS `himpPenyakit` INNER JOIN `penyakit` ON `himpPenyakit`.`kodePenyakit` = `penyakit`.`kodePenyakit`";
            $result = $this->db->executeSelectQuery($query); //ambil nama penyakitnya, idKategorinya apa, sama kode penyakit dari semua inputan gejala bdskan kodeGejala
            if(count($result)!=0){ //berarti ada 1 atau lebih nama penyakit yang ketemu
            $kode = $result[0][2];
            $z = "SELECT `username` FROM `member` WHERE `namaMember`='$nama'";
            $y = $this->db->executeSelectQuery($z); //untuk msukin ke tabel diagnosa
            $x = $y[0][0];
            $dt = new DateTime();
            $tglJoin = $dt->format('Ymd'); //kapan terkena penyakitnya
            $q = "INSERT INTO `diagnosa`(`waktu`,`kodePenyakit`,`username`) VALUES ('$tglJoin',$kode,'$x')";
            $this->db->executeNonSelectQuery($q);
            for($i=0; $i<$jumlah; $i++){
                $a = $gejala[$i][0];
                $q = "INSERT INTO `punya`(`waktu`,`username`,`kodeGejala`) VALUES('$tglJoin','$x',$a)";
                $this->db->executeNonSelectQuery($q); //masukin setiap gejala yg dipilih
            }
            
                $a=$result; //ambil nama penyakitnya
                $b=$result[0][1]; //ambil idKategorinya
                $query = "SELECT `namaKategori` FROM `kategori` WHERE `idKategori`=$b";
                $hasil = $this->db->executeSelectQuery($query); //ambil namaKategorinya
                $b = $hasil[0][0];
                return View::createHomepage('gejala1.php',[
                    "res"=>$res,
                    "profil"=>$profil,
                    "nama"=>$nama,
                    "msg1"=>$a,
                    "msg2"=>$b
                ]);
            }
            else{
                $a = "penyakit tidak ditemukan";
                $b="";
                return View::createHomepage('gejala1.php',[
                    "res"=>$res,
                    "profil"=>$profil,
                    "nama"=>$nama,
                    "msg1"=>$a,
                    "msg2"=>$b
                ]);
            }
        }
    
        public function show(){ 
            $query = "SELECT `namaPenyakit` FROM `Penyakit` WHERE `kategori`= ";
            $res = $this->db->executeSelectQuery($query);
            if(count($res)!=0){
                echo $res[0];
            }
            else{
                echo "penyakit tidak ditemukan";
            }
            session_start();
            $nama = $_SESSION['userlogin'];
            session_write_close();
            $query = "SELECT `profil` FROM `member` WHERE `namaMember`='$nama'";
            $profil = $this->db->executeSelectQuery($query);
            return View::createHomepage('penyakit.php', [
                "nama"=>$nama,
                "res"=>$res,
                "profil"=>$profil
            ]);
        }

        public function addPenyakit(){ //menambahkan penyakit ke db
            $query = "INSERT INTO `penyakit` (`namaPenyakit`, `idKategori`) VALUES";
            $temp = $_POST['namaPenyakit'];
            $kateg = $_POST['kateg'];
            $q = "SELECT `idKategori` FROM `kategori` WHERE `namaKategori` = '$kateg'";
            $result = $this->db->executeSelectQuery($q);
            print_r($result);
            if(isset($temp) && $temp != '') {
                $temp1 = $this->db->escapeString($temp);
                $temp2 = $result[0][0];
                $query.= "('$temp1', $temp2);";
            }
            print_r($query);
            $this->db->executeNonSelectQuery($query);
        }

        public function showPenyakit(){
            $query = "SELECT * FROM `penyakit`";
            $res = $this->db->executeSelectQuery($query);            
            return View::createAdmin('penyakit.php', [
                "res"=>$res
            ]);
        }

        public function add(){
            $query = "SELECT `namaKategori` FROM `kategori`";
            $res = $this->db->executeSelectQuery($query);
            return View::createAdmin('addPenyakit.php', [
                "res"=>$res
            ]);
        }

        public function delete(){
            $kd = $_GET['id'];
            $query = "DELETE FROM `hubungan` WHERE `kodePenyakit`=$kd";
            $this->db->executeNonSelectQuery($query);
            $query = "DELETE FROM `penyakit` WHERE `kodePenyakit`=$kd";
            $this->db->executeNonSelectQuery($query);
        }
    }   
?>