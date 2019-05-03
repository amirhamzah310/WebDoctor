<?php
    include "model/kategori.php";
    require_once "view/view.php";
    require_once "mysqlDB.php";

    class KategoriController{
        protected $db;

        public function __construct(){
            $this->db = new mysqlDB("localhost","root","","webdoctor");
        }

        public function addKategori(){
            $query = "INSERT INTO `Kategori` (`namaKategori`) VALUES";
            $temp = $_POST['namaKategori'];
            if(isset($temp) && $temp != ''){
                $temp = $this->db->escapeString($temp);
                $query.= "('$temp');";
            }
            $res = $this->db->executeNonSelectQuery($query);
        }

        public function showKategori(){
            $query = "SELECT * FROM `kategori`";
            $res = $this->db->executeSelectQuery($query);
            return View::createAdmin('kategori.php', [
                "res"=>$res
            ]);
        }

        public function add(){
            return View::createAdmin('addKategori.php', []);
        }

        public function delete(){
            $kd = $_GET['id'];
            $query = "DELETE FROM `hubungan` WHERE `kodePenyakit`=$kd";
            $this->db->executeNonSelectQuery($query);
            $query = "DELETE FROM `penyakit` WHERE `idKategori`=$kd";
            $this->db->executeNonSelectQuery($query);
            $query = "DELETE FROM `kategori` WHERE `idKategori`=$kd";
            $this->db->executeNonSelectQuery($query);
        }
    }
?>