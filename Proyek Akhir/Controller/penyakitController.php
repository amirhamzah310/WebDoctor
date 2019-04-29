<?php
    require_once "mysqlDB.php";
    $db = new mysqlDB("localhost","root","","webdoctor");
    $query = "SELECT `namaPenyakit` FROM `penyakit` WHERE `kategori`=";
    $res = $db->executeSelectQuery($query);
    if(count($res)!=0){
        echo $res[0];
    }
    else{
        echo "penyakit tidak ditemukan";
    }
?>