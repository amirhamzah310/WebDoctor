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
            $query="SELECT `peran`,`namaMember` FROM `member` WHERE (`username`=";
            if(isset($usr)&&$usr!=""){
                $usr=$this->db->escapeString($usr);
                $query.="'$usr' OR `email`='$usr') AND ";
            }
            if(isset($pss)&&$pss!=""){
                $pss=$this->db->escapeString($pss);
                $hashedPassword=md5($pss);
                $query.="`password`='$hashedPassword'";
            }
            $res = $this->db->executeSelectQuery($query);
            if(count($res)!=0){
                if($res[0][0]==1){//admin
                    header('');
                    print_r("masuk");
                }
                else if($res[0][0]==0){ //user
                    session_start();
                    $_SESSION['userlogin'] = $res[0][1];
                    session_write_close();
                    header('Location: homepage');
                }
            }
            else{
                return View::createView('wronglogin.php',[]);
            }
        }

        public function forgot(){
            return View::createView('forgot.php',[]);
        }

        public function updatePass(){
            $usr=$_POST['iUsr'];
            $pss=$_POST['inputPass'];
            $query = "UPDATE `member` SET ";
            if(isset($pss)&&$pss!=""){
                $pss=$this->db->escapeString($pss);
                $hashedPassword=md5($pss);
                $query.="`password`='$hashedPassword' WHERE `username`=";
            }
            if(isset($usr)&&$usr!=""){
                $usr=$this->db->escapeString($usr);
                $query.="'$usr' OR `email`='$usr'";
            }
            $this->db->executeNonSelectQuery($query);
        }
    }
?>