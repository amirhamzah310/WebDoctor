<div class="nav">
    <div class="menuKiri">
        <a href="profile">
            <?php
                echo "<img src='View/Style/uploads/".$profil."' id='pp'>";
            ?>
            <p id="halonama">Halo, <?=$nama?>!</p>
        </a>
    </div>
    <div class="menuKanan">
        <a href="homepage">Home</a>
        <span id="pembatas">|</span>
        <a href="riwayat">Lihat Riwayat Penyakit</a>
        <span id="pembatas">|</span>
        <a href="index.php">Logout</a>
    </div>
</div>
<div class="blok"></div>
<h1 class="judul">Riwayat Penyakit<h1>
        <table>
            <tr>
                <th>Tanggal</th>
                <th>Penyakit</th>
                <th>Kategori</th>
                <th>Gejala</th>
            </tr>
            <?php
                foreach ($res as $key => $value) {
                    echo "<tr>";
                    echo "<td>".$value[0]."</td>";
                    echo "<td>".$value[1]."</td>";
                    echo "<td>".$value[2]."</td>";
                    echo "<td>".$value[3]."</td>";
                    echo "</tr>";
                }
            ?>
        </table>
        <form action="homepage" method="get">
            <input type="submit" id="btnKembali" value="Kembali">
        </form>