<div class="header">
    <h1 class="judul">Daftar Penyakit Gejala Kategori</h1>
</div>
<input type="text" name="search" id="search" placeholder="Masukkan kata kunci pencarian"><br><br>
<div id="isi">
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
<div id="pagination">
    <?php
        $start = 0;
        $show = 5;
        $pageCount=$page / $show;
        for ($key=0;$key<$pageCount;$key++) {
            echo "<a href=?start=".($key*5)." id='page'>".($key+1)."</a>";
            echo "&nbsp;";
        }
        // if(isset($_GET['start'])){
        //     $start=$this->db->escapeString($_GET['start']);
        // }
        // $query .= " LIMIT $start, $show";
        // print_r($query);
        // $hasil = $this->db->executeSelectQuery($query);
    ?>
</div>
<script src="View/Script/search.js"></script>