<?php

    require_once __DIR__ . '/vendor/autoload.php';
    include "main.php";

    $mpdf = new \Mpdf\Mpdf();
    $html = '    
    <html>
    <head>
        <link rel="stylesheet" href="View/Style/style.css">        
    </head>
    <body> 
    <h1 class="judul">Daftar Penyakit Gejala Kategori</h1>
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
    foreach ($res as $key => $value) {
        $html.= "<tr>";
        $html.= "<td>";
        $html.= ($key+1);
        $html.= "</td>";
        $html.= "<td>";
        $html.= "$value[0]";
        $html.= "</td>";
        $html.= "<td>";
        $html.= "$value[1]";
        $html.= "</td>";
        $html.= "<td>";
        $html.= "$value[2]";
        $html.= "</td>";
        $html.= "<td>";
        $html.= "$value[3]";
        $html.= "</td>";
        $html.= "<td>";
        $html.= "$value[4]";
        $html.= "</td>";
        $html.= "<td>";
        $html.= "$value[5]";
        $html.= "</td>";
        $html.= "</tr>";
    }
    $html.="</table>";
    $html.="</body>";
    $html.="</html>";
    $mpdf->WriteHTML($html);
    $mpdf->Output();
?>