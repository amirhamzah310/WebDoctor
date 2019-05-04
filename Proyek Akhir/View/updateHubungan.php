<fieldset>
    <legend>Update Hubungan</legend>
    <label>
        <form action="updateHubungan" method="post">
        Nama Gejala:
        <select name="gejala">
            <option>Pilih Gejala</option>
            <?php
                foreach ($resGejala as $key => $value) {
                    echo '<option>';
                    echo $value[0];
                    echo '</option>';
                }
            ?>
        </select>
        <br><br>
        Nama Penyakit:
        <select name="penyakit">
            <option>Pilih Penyakit</option>
            <?php
                foreach ($resPenyakit as $key => $value) {
                    echo '<option>';
                    echo $value[0];
                    echo '</option>';
                }
            ?>
        </select>
        <br><br>
        <input type="Submit" name="submit" value="Tambah"/>
        </form>
    </label>
</fieldset>

<form action="admin" method="get">
    <input type="submit" id="btnKembali" value="Kembali">
</form>