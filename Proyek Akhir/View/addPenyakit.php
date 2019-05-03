<fieldset>
    <legend>Tambah Penyakit</legend>
    <label>
        <form action="tambahPenyakit" method="POST">
        Nama Penyakit:
        <input type="text" name="namaPenyakit" id="namaPenyakit"> 
        <br><br>
        
        Kategori Penyakit:
        <select name="kateg">       
            <option>Pilih Kategori</option>
            <?php
                foreach($res as $key => $value){
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

<form action="admin" method="get">
    <input type="submit" id="btnKembali" value="Kembali">
</form>