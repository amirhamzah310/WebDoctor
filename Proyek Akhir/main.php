<?php
    require_once "Controller/mysqlDB.php";
    $db = new mysqlDB("localhost","root","","webdoctor");
    $query = "SELECT `kodePenyakit`, `namaPenyakit`, `kodeGejala`, `namaGejala`, `idKategori`, `namaKategori` FROM `penyakit` INNER JOIN `hubungan` ON `penyakit`.`kodePenyakit` = `hubungan.kodePenyakit` INNER JOIN `gejala` ON `hubungan`.`kodeGejala` = `gejala`.`kodeGejala` INNER JOIN `kategori` ON `penyakit`.`idKategori` = `kategori`.`idKategori`";
    $res = $db->executeSelectQuery($query);
?>