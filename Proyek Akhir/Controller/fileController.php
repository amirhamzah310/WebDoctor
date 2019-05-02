<?php
    require_once "view/view.php";
    require_once "mysqlDB.php";

    class FileController{
        protected $db;

        public function __construct(){
            $this->db = new mysqlDB("localhost","root","","webdoctor");
        }

        public function upload(){
            if ($_FILES['upfile']['name']!="") {
                $oldName=$_FILES['upfile']['tmp_name'];
                $newName=dirname(__DIR__)."\\View\\Style\\uploads\\".$_FILES['upfile']['name'];
                move_uploaded_file($oldName,$newName);
                session_start();
                $nama=$_SESSION['userlogin'];
                session_write_close();
                $namaFile = $_FILES['upfile']['name'];
                $query = "UPDATE `member` SET `profil` = '$namaFile' WHERE `namaMember`='$nama'";
                $this->db->executeNonSelectQuery($query);
                header('Location: homepage');
            }
            else{
                echo "Error: Tidak ada file yang di upload";
            }
        }

        public function reset(){
            session_start();
            $nama=$_SESSION['userlogin'];
            session_write_close();
            $query = "UPDATE `member` SET `profil` = 'no-profile.jpg' WHERE `namaMember`='$nama'";
            $this->db->executeNonSelectQuery($query);
        }
    }
?>