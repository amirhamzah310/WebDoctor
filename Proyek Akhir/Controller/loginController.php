<?php
    include "model/login.php";
    require_once "view/view.php";
    require_once "mysqlDB.php";
    class LoginController{
        protected $db;
        public function __construct(){
            $this->db = new mysqlDB("localhost","root","","library");
        }

        public function start(){
            return View::createView('login.php',[]);
        }

        public function auth(){
            $usr=$_POST['iUsr'];
            $pss=$_POST['iPss'];
            $query="SELECT `peran` FROM Member WHERE ";
            if(isset($usr)&&$usr!=""){
                $usr=$this->db->escapeString($usr);
                $query.="`username`='$usr' AND ";
            }
            if(isset($pss)&&$pss!=""){
                $pss=$this->db->escapeString($pss);
                $hashedPassword=md5($pss);
                $query.="`password`='$hashedPassword'";
            }
            print_r($query);
            $res = $this->db->executeSelectQuery($query);
            if($res==0){//admin
                header('');
            }
            else{ //user
                header('View/home.php');
            }
        }

        public function sign(){
            return View::createView('signUp.php',[]);
        }
    }
?>