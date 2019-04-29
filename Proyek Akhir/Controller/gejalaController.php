<?php
    include "model/gejala.php";
    require_once "view/view.php";
    require_once "mysqlDB.php";
    class GejalaController{
        protected $db;
        public function __construct(){
            $this->db = new mysqlDB("localhost","root","","webdoctor");
        }

        public function show(){
            $query = "SELECT namaGejala FROM Gejala";
            $res = $this->db->executeSelectQuery($query);
            return View::createView(gejala.php,[
                "res"=$res;
            ]);
        }
    }
?>