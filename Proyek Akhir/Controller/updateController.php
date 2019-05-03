<?php    
    require_once "view/view.php";
    require_once "mysqlDB.php";
    class UpdateController{
        protected $db;
        public function __construct(){
            $this->db = new mysqlDB("localhost","root","","webdoctor");
        }

        public function start(){
            $query1 = "SELECT namaGejala FROM Gejala";
            $resGejala = $this->db->executeSelectQuery($query1);
            $query2 = "SELECT namaPenyakit FROM Penyakit";
            $resPenyakit = $this->db->executeSelectQuery($query2);
            return View::createAdmin('updateHubungan.php',[
                "resGejala"=> $resGejala,
                "resPenyakit"=> $resPenyakit
            ]);
        }

        public function showUpdate(){
            return View::createAdmin('updateHubungan.php', []);
        }       
    }
?>