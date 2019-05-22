<?php
    require_once "mysqlDB.php";
    $db = new mysqlDB("localhost","root","","webdoctor");
    
    $q = $_GET["q"];
    $query = "SELECT `penyakit`.`kodePenyakit`,`namaPenyakit`,`gejala`.`kodeGejala`,`namaGejala`,`kategori`.`idKategori`,`namaKategori` FROM `penyakit` INNER JOIN `hubungan` ON `penyakit`.`kodePenyakit` = `hubungan`.`kodePenyakit` INNER JOIN `gejala` ON `hubungan`.`kodeGejala` = `gejala`.`kodeGejala` INNER JOIN `kategori` ON `penyakit`.`idKategori` = `kategori`.`idKategori` WHERE `penyakit`.`kodePenyakit` LIKE '%$q%' OR `namaPenyakit` LIKE '%$q%' OR `gejala`.`kodeGejala` LIKE '%$q%' OR `namaGejala` LIKE '%$q%' OR `kategori`.`idKategori` LIKE '%$q%' OR `namaKategori` LIKE '%$q%'";
    $res = $db->executeSelectQuery($query);
?>
<table>
        <tr>
            <th>No</th>
            <th>Kode Penyakit</th>
            <th>Nama Penyakit</th>
            <th>Kode Gejala</th>
            <th>Nama Gejala</th>
            <th>Kode Kategori</th>
            <th>Nama Kategori</th>
        </tr>
        <?php
        foreach ($res as $key => $value) {
            echo "<tr>";
            echo "<td>".($key+1)."</td>";
            echo "<td>".$value[0]."</td>";
            echo "<td>".$value[1]."</td>";
            echo "<td>".$value[2]."</td>";
            echo "<td>".$value[3]."</td>";
            echo "<td>".$value[4]."</td>";
            echo "<td>".$value[5]."</td>";
            echo "</tr>";
        }
    ?>
    </table>