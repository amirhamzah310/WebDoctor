<?php
    // include "model/kategori.php";
    require_once "view/view.php";
    require_once "mysqlDB.php";
    class ProfileController{
        protected $db;
        public function __construct(){
            $this->db = new mysqlDB("localhost","root","","webdoctor");
        }

        public function control(){
            session_start();
            $nama = $_SESSION['userlogin'];
            session_write_close();
            $query = "SELECT * FROM `member` WHERE `namaMember`='$nama'";
            $res = $this->db->executeSelectQuery($query);
            $query = "SELECT `profil` FROM `member` WHERE `namaMember`='$nama'";
            $profil = $this->db->executeSelectQuery($query);
            return View::createHomepage('profile.php',[
                "nama"=> $nama,
                "res"=> $res,
                "profil"=>$profil
            ]);
        }
    }
?>