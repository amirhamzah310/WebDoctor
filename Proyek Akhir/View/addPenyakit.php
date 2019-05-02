<fieldset>
    <legend>Tambah Penyakit</legend>
    <label>
        Nama Penyakit:
        <input type="text" name="namaPenyakit"> 
        <br><br>
        
        Kategori Penyakit:
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