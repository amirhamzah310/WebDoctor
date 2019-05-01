<?php
    include "model/kategori.php";
    require_once "view/view.php";
    require_once "mysqlDB.php";
    class HomeController{
        protected $db;
        public function __construct(){
            $this->db = new mysqlDB("localhost","root","","webdoctor");
        }

        public function start(){
            $query = "SELECT namaKategori FROM Kategori";
            $res = $this->db->executeSelectQuery($query);
            session_start();
            $nama = $_SESSION['userlogin'];
            session_write_close();
            $query = "SELECT `profil` FROM `member` WHERE `namaMember`='$nama'";
            $profil = $this->db->executeSelectQuery($query);
            return View::createView('home.php',[
                "nama"=> $nama,
                "res"=> $res,
                "profil"=>$profil
            ]);
        }
    }
?>