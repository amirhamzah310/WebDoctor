<?php
    include "model/login.php";
    require_once "view/view.php";
    require_once "mysqlDB.php";
    class SignUpController{
        protected $db;
        public function __construct(){
            $this->db = new mysqlDB("localhost","root","","webdoctor");
        }


        public function sign(){
            $tanggal=31;
            $bulan=12;
            $query = "SELECT `namaKota` FROM `kota`";
            $kota = $this->db->executeSelectQuery($query);
            return View::createView('signUp.php',[
                "tanggal"=>$tanggal,
                "bulan"=>$bulan,
                "kota"=>$kota
            ]);
        }

        public function signUp(){
            $nama=$_POST['inputNama'];
            $tahun=$_POST['year'];
            $bulan=$_POST['month'];
            $tanggal=$_POST['date'];
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
            $query.="'$tahun";
            if($bulan<10){
                $query.="0$bulan";
            }
            else{
                $query.="$bulan";
            }
            if($tanggal<10){
                $query.="0$tanggal',";
            }
            else{
                $query.="$tanggal',";
            }
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
                $hashedPassword=md5($password);
                $query.="'$hashedPassword',";
            }
            $query.="0);";
            $this->db->executeNonSelectQuery($query);
        }
    }
?>