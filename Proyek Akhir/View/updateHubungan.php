<div class="nav">        
    <div class="menuKanan">
        <a href="logout">Logout</a>
    </div>
</div>

<fieldset>
    <legend>Update Hubungan</legend>
    <label>
        <form action="updateHubungan" method="POST">
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
        
        <input type="submit" value="Submit">
        </form>
    </label>
</fieldset>

<form action="admin" method="get">
    <input type="submit" id="btnKembali" value="Kembali">
</form>