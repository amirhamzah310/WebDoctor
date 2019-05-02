<fieldset>
    <legend>Tambah Gejala</legend>
    <label>
        <form action="addGejala" method="POST">
        Nama Gejala:
        <input type="text" name="namaGejala" id="namaGejala">        
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
        </form>
    </label>    
</fieldset>

<form action="" method="get">
    <input type="submit" id="btnKembali" value="Kembali">
</form>