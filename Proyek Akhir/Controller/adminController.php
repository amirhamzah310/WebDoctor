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
            $query = "SELECT penyakit.kodePenyakit AS 'Kode Penyakit', penyakit.namaPenyakit AS 'Nama Penyakit', gejala.kodeGejala AS 'Kode Gejala', gejala.namaGejala AS 'Nama Gejala', kategori.idKategori AS 'Kode Kategori', kategori.namaKategori AS 'Nama Kategori' FROM penyakit INNER JOIN hubungan ON penyakit.kodePenyakit = hubungan.kodePenyakit INNER JOIN gejala ON hubungan.kodeGejala = gejala.kodeGejala INNER JOIN kategori ON penyakit.idKategori = kategori.idKategori";
            $res = $this->db->executeSelectQuery($query);
            return View::createAdmin('admin.php', []);
        }
    }
?>