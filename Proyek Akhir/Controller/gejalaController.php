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
            // $kategori = $_GET['pilihPenyakit'];
            $query = "SELECT namaGejala FROM Gejala";
            $res = $this->db->executeSelectQuery($query);
            session_start();
            $nama = $_SESSION['userlogin'];
            session_write_close();
            $query = "SELECT `profil` FROM `member` WHERE `namaMember`='$nama'";
            $profil = $this->db->executeSelectQuery($query);
            return View::createHomepage('gejala.php',[
                // "kategori"=>$kategori,
                "nama"=>$nama,
                "res"=>$res,
                "profil"=>$profil
            ]);
        }
    }
?>