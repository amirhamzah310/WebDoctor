<div class="nav">
    <div class="menuKiri">
        <p id="halonama">Halo, <?=$namaAdmin?>!</p>
    </div>
    <div class="pilihanMenu">
        <a href="">All</a>
        <span id="pembatas">|</span>
        <a href="">Penyakit</a>
        <span id="pembatas">|</span>
        <a href="">Gejala</a>
        <span id="pembatas">|</span>
        <a href="">Kategori</a>
        <span id="pembatas">|</span>
        <a href="">Update</a>
    </div>
    <div class="menuKanan">
        <a href="index.php">Logout</a>
    </div>
<p>Update Hubungan</p>
<p>Nama Gejala</p>
<select name="gejala">
    <option>Select Gejala</option>
    <?php
        foreach ($resGejala as $key => $value) {
            echo '<option>';
            echo $value[0];
            echo '</option>';
        }
    ?>
</select>
<p>Nama Penyakit</p>    
<select name="penyakit">
<option>Select Penyakit</option>
    <?php
        foreach ($resPenyakit as $key => $value) {
            echo '<option>';
            echo $value[0];
            echo '</option>';
        }
    ?>
</select>

<form action="" method="get">
    <input type="submit" id="btnKembali" value="Kembali">
</form>