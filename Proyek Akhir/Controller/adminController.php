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
            $query = "SELECT `penyakit`.`kodePenyakit`,`namaPenyakit`,`gejala`.`kodeGejala`,`namaGejala`,`kategori`.`idKategori`,`namaKategori` FROM `penyakit` INNER JOIN `hubungan` ON `penyakit`.`kodePenyakit` = `hubungan`.`kodePenyakit` INNER JOIN `gejala` ON `hubungan`.`kodeGejala` = `gejala`.`kodeGejala` INNER JOIN `kategori` ON `penyakit`.`idKategori` = `kategori`.`idKategori` LIMIT 0,5";
            $result = $this->db->executeSelectQuery($query);
            $page = count($result);
            return View::createAdmin('admin.php', [
                "res"=>$result,
                "page"=>$page,
                "query"=>$query
            ]);
        }        
    }
?>