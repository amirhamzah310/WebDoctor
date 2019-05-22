<div class="header">
    <h1 class="judul">Riwayat Penyakit<h1>
</div>
<table class="tabel">
    <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Gejala</th>
        <th>Penyakit</th>
        <th>Kategori</th>

    </tr>
    <?php
        foreach ($res as $key => $value) {
            echo "<tr>";
            echo "<td>".($key+1)."</td>";
            echo "<td>".$value[0]."</td>";
            echo "<td>".$value[3]."</td>";
            echo "<td>".$value[1]."</td>";
            echo "<td>".$value[2]."</td>";
            echo "</tr>";
        }
    ?>
</table>
<form action="homepage" method="get">
    <button id="btnKembali">Kembali</button>
</form>