<?php
    include "model/admin.php";
    require_once "view/view.php";
    require_once "mysqlDB.php";

    class AdminController{
        protected $db;

        public function __construct(){
            $this->db = new mysqlDB("localhost","root","","webdoctor");
        }

        public function start(){            
            $query = "SELECT `kodePenyakit` AS 'Kode Penyakit', `namaPenyakit` AS 'Nama Penyakit', `kodeGejala` AS 'Kode Gejala', `namaGejala` AS 'Nama Gejala', `idKategori` AS 'Kode Kategori', `namaKategori` AS 'Nama Kategori' FROM `penyakit` INNER JOIN `hubungan` ON `penyakit.kodePenyakit` = `hubungan.kodePenyakit` INNER JOIN `gejala` ON `hubungan.kodeGejala` = `gejala.kodeGejala` INNER JOIN `kategori` ON `penyakit.idKategori` = `kategori.idKategori`";
            $res = $this->db->executeSelectQuery($query);
            return View::createAdmin('admin.php', []);
        }        
    }
?>