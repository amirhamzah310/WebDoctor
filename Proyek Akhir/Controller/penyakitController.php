<?php
    include "model/gejala.php";
    require_once "view/view.php";
    require_once "mysqlDB.php";

    class PenyakitController{
        protected $db;

        public function __construct(){
            $this->db = new mysqlDB("localhost","root","","webdoctor");
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
            $query = "INSERT INTO `Penyakit` (`namaPenyakit`) VALUES";
            $temp = $_POST['namaPenyakit'];
            if(isset($temp) && $temp != ''){
                $temp = $this->db->escapeString($temp);
                $query.= "('$temp')";
            }
            $res = $this->db->executeNonSelectQuery($query);
        }

        public function add(){
            return View::createAdmin('addPenyakit.php', []);
        }
    }   
?>