<div class="header">
    <h1 class="judul">PROFIL <?=strtoupper($nama)?></h1>
</div>
<div class="foto">
    <form action="upload" method="post" enctype="multipart/form-data">
        <label for="profileImage">Foto Anda</label><br>
        <?php
            echo "<img src='View/Style/uploads/".$res[0][8]."' id='displayPicture' onclick='trigger()'>";
        ?>
        File yang diupload maksimum berukuran 30 x 30
        <input type="file" name="upfile" id="upfile" onchange="display(this)"><br>
        <input type="submit" value="Simpan">
    </form>
</div>
<div class="konten">
    Username : <?=$res[0][0]?><br>
    Tanggal Lahir : <?=$res[0][2]?><br>
    Kota : <?=$res[0][3]?><br>
    Alamat : <?=$res[0][4]?><br>
    Email : <?=$res[0][5]?><br>
    Tanggal Bergabung : <?=$res[0][9]?>
</div>