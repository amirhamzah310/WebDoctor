<p>Halo, <?=$nama?>!</p>
<a href="home">Home</a>
<span id="pembatas">|</span>
<a href="">Lihat Riwayat Penyakit</a>
<span id="pembatas">|</span>
<a href="index.php">Logout</a>
<h1>Silahkan pilih keluhan</h1>
<select name="dropdownPenyakit" id="pilihPenyakit">
    <option value="">- Pilih Keluhan -</option>
    <?php
        foreach($res as $key => $value){
            echo "<option>";
            echo "$value";
            echo "</option>";
        }
    ?>
</select>
<form action="" method="get">
    <input type="submit" id="btnMulai" value="Mulai">
</form>