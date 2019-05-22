<?php
    require_once "view/view.php";
    require_once "mysqlDB.php";

    class AboutController{
        protected $db;

        public function __construct(){
            $this->db = new mysqlDB("localhost","root","","webdoctor");
        }

        public function show(){
            session_start();
            $nama = $_SESSION['userlogin'];
            session_write_close();
            $query = "SELECT `profil` FROM `member` WHERE `namaMember`='$nama'";
            $profil = $this->db->executeSelectQuery($query);            
            return View::createHomepage('about.php',[
                "nama"=>$nama,
                "profil"=>$profil
            ]);
        }
    }
?>