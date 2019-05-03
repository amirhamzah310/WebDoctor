<?php
    include "model/gejala.php";
    require_once "view/view.php";
    require_once "mysqlDB.php";
    class GejalaController{
        protected $db;
        public function __construct(){
            $this->db = new mysqlDB("localhost","root","","webdoctor");
        }

        public function show(){
            $kategori = $_GET['dropdownPenyakit'];
            $query = "SELECT `namaGejala` FROM `Gejala`";
            $res = $this->db->executeSelectQuery($query);
            session_start();
            $nama = $_SESSION['userlogin'];
            $_SESSION['kateg'] = $kategori;
            session_write_close();
            $query = "SELECT `profil` FROM `member` WHERE `namaMember`='$nama'";
            $profil = $this->db->executeSelectQuery($query);
            return View::createHomepage('gejala.php',[
                "nama"=>$nama,
                "res"=>$res,
                "profil"=>$profil
            ]);
        }

        public function addGejala(){
            $query = "INSERT INTO `Gejala` (`namaGejala`) VALUES";
            $temp = $_POST['namaGejala'];
            if(isset($temp) && $temp != ''){
                $temp = $this->db->escapeString($temp);
                $query.= "('$temp');";
            }
            $res = $this->db->executeNonSelectQUery($query);
        }

        public function showGejala(){
            return View::createAdmin('Gejalaa.php',[]); 
        }

        public function add(){
            return View::createAdmin('addGejala.php', []);
        }
    }
?>