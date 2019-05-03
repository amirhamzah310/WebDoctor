<div class="header">
    <h1 class="judul">Daftar Penyakit Gejala Kategori</h1>
</div>
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
</div>