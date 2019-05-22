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
                $query.="`kataSandi`='$hashedPassword'";
            }
            $res = $this->db->executeSelectQuery($query); //hasil execute query di atas jadi array 2D (tabel), fieldnya peran sama namaMember
            if(count($res)!=0){ //periksa kalau array yg dikembalikan tidak kosong
                if($res[0][0]==1){//kalau field peran nilainya 1 berarti admin
                    header('Location: admin'); //maka diarahkan ke admin
                }
                else if($res[0][0]==0){ //kalau field peran nilainya 0 berarti user
                    session_start();
                    $_SESSION['userlogin'] = $res[0][1]; //buat session dengan nama userlogin lalu masukkan isi field namaMember
                    session_write_close();
                    header('Location: homepage'); //arahkan ke homepage user
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
                $query.="`kataSandi`='$hashedPassword' WHERE `username`=";
            }
            if(isset($usr)&&$usr!=""){
                $usr=$this->db->escapeString($usr);
                $query.="'$usr' OR `email`='$usr'";
            }
            $this->db->executeNonSelectQuery($query);
        }

        public function logout(){
            session_start();
            unset($_SESSION['userlogin']);
            session_destroy();
        }

        public function deleteAkun(){
            session_start();
            $nama = $_SESSION['userlogin'];
            $query = "SELECT `username` FROM `member` WHERE `namaMember`='$nama'";
            $usr = $this->db->executeSelectQuery($query);
            $usr = $usr[0][0];
            $query = "DELETE FROM `diagnosa` WHERE `username` = '$usr'";
            $this->db->executeSelectQuery($query);
            $query = "DELETE FROM `punya` WHERE `username` = '$usr'";
            $this->db->executeSelectQuery($query);
            $query = "DELETE FROM `member` WHERE `namaMember` = '$nama'";
            $this->db->executeNonSelectQuery($query);
            unset($_SESSION['userlogin']);
            unset($nama);
            session_destroy();
        }
    }
?>