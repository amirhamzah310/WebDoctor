<?php    
    require_once "view/view.php";
    require_once "mysqlDB.php";
    class UpdateController{
        protected $db;
        public function __construct(){
            $this->db = new mysqlDB("localhost","root","","webdoctor");
        }

        public function start(){
            $query1 = "SELECT `namaGejala` FROM `gejala`";
            $resGejala = $this->db->executeSelectQuery($query1);
            $query2 = "SELECT `namaPenyakit` FROM `penyakit`";
            $resPenyakit = $this->db->executeSelectQuery($query2);
            return View::createAdmin('updateHubungan.php',[
                "resGejala"=> $resGejala,
                "resPenyakit"=> $resPenyakit
            ]);
        }

        public function showUpdate(){
            $g = $_POST['gejala'];
            $p = $_POST['penyakit'];
            $q1 = "SELECT `kodeGejala` FROM `gejala` WHERE `namaGejala`='$g'";
            $q2 = "SELECT `kodePenyakit` FROM `penyakit` WHERE `namaPenyakit`='$p'";
            $gejala = $this->db->executeSelectQuery($q1);
            $penyakit = $this->db->executeSelectQuery($q2);
            $gejala = $gejala[0][0];
            $penyakit = $penyakit[0][0];
            $query = "INSERT INTO `hubungan` VALUES ($penyakit,$gejala);";
            $res = $this->db->executeNonSelectQuery($query);
            return View::createAdmin('updateHubungan.php', [
                "resGejala"=>$gejala,
                "resPenyakit"=>$penyakit
            ]);
        }       
    }
?>