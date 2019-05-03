<div class="header">
    <h1 class="judul">Daftar Penyakit</h1>
</div>
<table>
    <tr>
        <th>Kode Penyakit</th>
        <th>Nama Penyakit</th>
        <th>ID Kategori</th>        
    </tr>
    <?php
            foreach($res as $key=>$value){
                echo "<tr>";
                echo "<td>".$value[0]."</td>";
                echo "<td>".$value[1]."</td>";
                echo "<td>".$value[2]."</td>";
                echo "</tr>";
            }
    ?>
</table>
<form action="viewAddPenyakit" method="get">
    <input type="submit" id="btnTambah" value="Tambah">
</form>
<form action="admin" method="get">
    <input type="submit" id="btnKembali" value="Kembali">
</form>