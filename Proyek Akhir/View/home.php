<div class="content">
    <h1>Silahkan pilih keluhan</h1>
    <div class="pilih">
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
    </div>
    <div class="sumit">
        <form action="" method="get">
            <input type="submit" id="btnMulai" value="Mulai">
        </form>
    </div>
</div>
<div class="nav">
    <div class="menuKiri">
        <p id="halonama">Halo, <?=$nama?>!</p>
    </div>
    <div class="menuKanan">
        <a href="homepage">Home</a>
        <span id="pembatas">|</span>
        <a href="">Lihat Riwayat Penyakit</a>
        <span id="pembatas">|</span>
        <a href="index.php">Logout</a>
    </div>
</div>