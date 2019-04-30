<div class="nav">
    <div class="menuKiri">
        <p id="halonama">Halo, <?=$nama?>!</p>
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
<div class="header">
    <h1 class="judul">Silahkan pilih keluhan</h1>
    <div id="pilih">
        <form action="gejala" method="get">
            <select name="dropdownPenyakit" id="pilihPenyakit">
                <option value="">- Pilih Keluhan -</option>
                <?php
                foreach($res as $key => $value){
                    echo "<option>";
                    echo "$value[0]";
                    echo "</option>";
                }
            ?>
            </select>
            <input type="submit" id="btnMulai" value="Mulai">
        </form>
    </div>
</div>