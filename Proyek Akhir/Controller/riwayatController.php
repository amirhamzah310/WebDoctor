<?php
    include "model/riwayat.php";    
    require_once "view/view.php";
    require_once "mysqlDB.php";
    class RiwayatController{
        protected $db;
        public function __construct(){
            $this->db = new mysqlDB("localhost","root","","webdoctor");
        }

        public function start(){
            //query mungkin bisa lebih sederhana
            $query = "SELECT 
                        diagnosa.waktu AS Tanggal, 
                        penyakit.namaPenyakit AS Penyakit, 
                        kategori.namaKategori AS Kategori, 
                        gejala.namaGejala AS Gejala 
                    FROM 
                        diagnosa 
                    INNER JOIN 
                        penyakit ON diagnosa.kodePenyakit = penyakit.kodePenyakit 
                    INNER JOIN 
                        kategori ON penyakit.idKategori = kategori.idKategori 
                    INNER JOIN 
                        hubungan ON penyakit.kodePenyakit = hubungan.kodePenyakit 
                    INNER JOIN 
                        gejala ON hubungan.kodeGejala = gejala.kodeGejala";
            $res = $this->db->executeSelectQuery($query);
            return View::createView('riwayat.php', []);
        }
    }
?>