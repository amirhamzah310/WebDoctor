<?php
    require_once "mysqlDB.php";
    $db = new mysqlDB("localhost","root","","webdoctor");
    
    $usr = $_GET["usr"];
    $query = "SELECT * FROM `member` WHERE `username`='$usr'";
    $res = $db->executeSelectQuery($query);
    if($res){
        echo "username tidak tersedia";
    }
    else{
        echo "username tersedia";
    }
?>