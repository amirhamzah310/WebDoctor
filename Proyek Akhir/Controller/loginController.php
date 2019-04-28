<?php
    include "model/login.php";
    require_once "view/view.php";
    require_once "mysqlDB.php";
    class LoginController{
        protected $db;
        public function __construct(){
            $this->db = new mysqlDB("localhost","root","","webdoctor");
        }

        public function start(){
            return View::createView('login.php',[]);
        }

        public function auth(){
            $usr=$_POST['iUsr'];
            $pss=$_POST['iPss'];
            $query="SELECT `peran` FROM `member` WHERE (`username`=";
            if(isset($usr)&&$usr!=""){
                $usr=$this->db->escapeString($usr);
                $query.="'$usr' OR `email`='$usr') AND ";
            }
            if(isset($pss)&&$pss!=""){
                $pss=$this->db->escapeString($pss);
                $hashedPassword=md5($pss);
                $query.="`password`='$hashedPassword'";
            }
            print_r($query);
            $res = $this->db->executeSelectQuery($query);
            if($res[0][0]==1){//admin
                header('');
                print_r("masuk");
            }
            else if($res[0][0]==0){ //user
                print_r("user");
            }
            else{
                print_r("tidak terdaftar");
            }
        }
    }
?>