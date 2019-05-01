<div class="nav">
    <div class="menuKiri">
        <p id="halonama">Halo, <?=$namaAdmin?>!</p>
    </div>    
    <div class="menuKanan">
        <a href="index.php">Logout</a>
    </div>
</div>

<fieldset>
    <legend>Tambah Gejala</legend>
    <label>
        Nama Gejala:
        <input type="text" name="namaGejala">        
        <br><br>

        Kategori Gejala:
        <select>       
            <option>Pilih Kategori</option>
            <?php
                foreach($res AS $key => $value){
                    echo '<option>';
                    echo $value[0];
                    echo '</option>';
                }
            ?>
        </select>
        <br><br>

        <input type="submit" value="Submit">
    </label>    
</fieldset>

<form action="" method="get">
    <input type="submit" id="btnKembali" value="Kembali">
</form>