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
            $query="SELECT `peran` FROM `member` WHERE ";
            if(isset($usr)&&$usr!=""){
                $usr=$this->db->escapeString($usr);
                $query.="(`username`='$usr' OR `email`='$usr') AND ";
            }
            if(isset($pss)&&$pss!=""){
                $pss=$this->db->escapeString($pss);
                $hashedPassword=md5($pss);
                $query.="`password`='$hashedPassword'";
            }
            print_r($query);
            $res = $this->db->executeSelectQuery($query);
            print_r($res);
            if($res==0){//admin
                header('');
            }
            else{ //user
                header('View/home.php');
            }
        }

        public function sign(){
            $tanggal=31;
            $bulan=12;
            $query = "SELECT `namaKota` FROM Kota";
            //$kota = $this->db->executeSelectQuery($query);
            return View::createView('signUp.php',[
                "tanggal"=>$tanggal,
                "bulan"=>$bulan,
                "kota"=>$kota
            ]);
        }

        public function signUp(){
            $nama=$_POST['inputNama'];
            // $ttl=$_POST['']; //gatau gimana cara ambil value dari dropdown pake method post
            $alamat=$_POST['inputAlamat'];
            $kota=$_POST['kota'];
            $user=$_POST['iUser'];
            $email=$_POST['inputEmail'];
            $password=$_POST['inputPass'];
            $query="INSERT INTO `member` VALUES(";
            if(isset($user)&&$user!=""){
                $user=$this->db->escapeString($user);
                $query.="'$user',";
            }
            if(isset($nama)&&$nama!=""){
                $nama=$this->db->escapeString($nama);
                $query.="'$nama',";
            }
            //tanggal lahir
            $query.="'19990105',";
            if(isset($kota)&&$kota!=""){
                $kota=$this->db->escapeString($kota);
                $query.="'$kota',";
            }
            if(isset($alamat)&&$alamat!=""){
                $alamat=$this->db->escapeString($alamat);
                $query.="'$alamat',";
            }
            if(isset($email)&&$email!=""){
                $email=$this->db->escapeString($email);
                $query.="'$email',";
            }
            if(isset($password)&&$password!=""){
                $password=$this->db->escapeString($password);
                $query.="'$password',";
            }
            $query.="0)";
            // print_r($query);
            $this->db->executeNonSelectQuery($query);
        }
    }
?>