<?php
    // include "model/kategori.php";
    require_once "view/view.php";
    require_once "mysqlDB.php";
    class HomeController{
        protected $db;
        public function __construct(){
            $this->db = new mysqlDB("localhost","root","","webdoctor");
        }

        public function start(){
            $query1 = "SELECT namaGejala FROM Gejala";
            $resGejala = $this->db->executeSelectQuery($query1);
            $query2 = "SELECT";
            $resPenyakit = $this->db->executeSelectQuery($query2);
            return View::createView('updateHubungan.php',[
                "resGejala"=> $resGejala,
                "resPenyakit"=> $resPenyakit
            ]);
        }
    }
?>