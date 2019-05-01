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