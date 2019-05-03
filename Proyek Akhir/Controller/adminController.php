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
            $start = 0;
            $query = "SELECT `penyakit`.`kodePenyakit`,`namaPenyakit`,`gejala`.`kodeGejala`,`namaGejala`,`kategori`.`idKategori`,`namaKategori` FROM `penyakit` INNER JOIN `hubungan` ON `penyakit`.`kodePenyakit` = `hubungan`.`kodePenyakit` INNER JOIN `gejala` ON `hubungan`.`kodeGejala` = `gejala`.`kodeGejala` INNER JOIN `kategori` ON `penyakit`.`idKategori` = `kategori`.`idKategori`";
            $result = $this->db->executeSelectQuery($query);
            $show = 5;
            $page = count($result) / $show;
            if(isset($_GET['start'])){
                $start=$this->db->escapeString($_GET['start']);
            }
            $query.=" LIMIT $start,$show";
            $result = $this->db->executeSelectQuery($query);
            return View::createAdmin('admin.php', [
                "res"=>$result,
                "page"=>$page,
                "query"=>$query
            ]);
        }        
    }
?>