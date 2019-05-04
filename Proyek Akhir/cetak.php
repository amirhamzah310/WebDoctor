<?php

    require_once __DIR__ . '/vendor/autoload.php';

    // require_once "mysqlDB.php";
    // $query = "SELECT `kodePenyakit`, `namaPenyakit`, `kodeGejala`, `namaGejala`, `idKategori`, `namaKategori` FROM `penyakit` INNER JOIN `hubungan` ON `penyakit`.`kodePenyakit` = `hubungan.kodePenyakit` INNER JOIN `gejala` ON `hubungan`.`kodeGejala` = `gejala`.`kodeGejala` INNER JOIN `kategori` ON `penyakit`.`idKategori` = `kategori`.`idKategori`";
    // $res = $this->db->executeSelectQuery($query);

    $mpdf = new \Mpdf\Mpdf();
    $html = '    
    <html>
    <head>
        <link rel="stylesheet" href="View/Style/style.css">        
    </head>
    <body> 
    <h1 class="judul">Daftar Penyakit Gejala Kategori</h1>
    <br>
    <table>
    <tr>
        <th>No</th>
        <th>Kode Penyakit</th>
        <th>Nama Penyakit</th>
        <th>Kode Gejala</th>
        <th>Nama Gejala</th>
        <th>Kode Kategori</th>
        <th>Nama Kategori</th>
    </tr>';   

    $html .= '</table>';



    $mpdf->WriteHTML($html);
    $mpdf->Output();

?>