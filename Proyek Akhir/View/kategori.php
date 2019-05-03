<div class="header">
    <h1 class="judul">Daftar Kategori</h1>
</div>
<table>
    <tr>
        <th>Kode Kategori</th>
        <th>Nama Kategori</th>
    </tr>
    <?php
        foreach($res as $key=>$value){
            echo "<tr>";
            echo "<td>".$value[0]."</td>";
            echo "<td>".$value[1]."</td>";
            echo "</tr>";
        }
    ?>
</table>
<form action="viewAddKategori" method="get">
    <input type="submit" id="btnTambah" value="Tambah">
</form>
<form action="" method="get">
    <input type="submit" id="btnKembali" value="Kembali">
</form>