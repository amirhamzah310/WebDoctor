<div class="header">
    <h1 class="judul">Daftar Gejala</h1>
</div>
<table>
    <tr>        
        <th>Kode Gejala</th>
        <th>Nama Gejala</th>
        <th>Aksi</th>
    </tr>
    <?php
        foreach($res as $key=>$value){ //$res -> array 2D di-looping menghasilkan $value -> array 1D
            echo "<tr>";
            echo "<td>".$value[0]."</td>"; //print kodeGejala
            echo "<td>".$value[1]."</td>"; //print namaGejala
            echo "<td><a href='deleteGejala?id=".$value[0]."' id='del'><i class='fas fa-trash-alt'></i>Hapus</a></td>";
            echo "</tr>";
        }
    ?>
</table>
<form action="viewAddGejala" method="get">
    <input type="submit" id="btnTambah" value="Tambah">
</form>
<form action="admin" method="get">
    <input type="submit" id="btnKembali" value="Kembali">
</form>