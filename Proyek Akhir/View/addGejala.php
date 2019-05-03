<fieldset>
    <legend>Tambah Gejala</legend>
    <label>
        <form action="addGejala" method="POST">
        Nama Gejala:
        <input type="text" name="namaGejala" class="namaGejala" placeholder="Tidak boleh memakai spasi">
        <br><br>        
            
        <input type="submit" value="Submit">        
        </form>
    </label>    
</fieldset>

<form action="admin" method="get">
    <input type="submit" id="btnKembali" value="Kembali">
</form>