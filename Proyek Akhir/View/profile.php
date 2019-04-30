<div class="nav">
    <div class="menuKiri">
        <a href="profile"><p id="halonama">Halo, <?=$nama?>!</p></a>
    </div>
    <div class="menuKanan">
        <a href="homepage">Home</a>
        <span id="pembatas">|</span>
        <a href="">Lihat Riwayat Penyakit</a>
        <span id="pembatas">|</span>
        <a href="index.php">Logout</a>
    </div>
</div>
<div class="blok"></div>
<div class="header">
    <h1 class="judul">PROFIL <?=strtoupper($nama)?></h1>
    <div class="foto">

    </div>
    <div class="konten">
        Username : <?=$res[0][0]?><br>
        Tanggal Lahir : <?=$res[0][2]?><br>
        Kota : <?=$res[0][3]?><br>
        Alamat : <?=$res[0][4]?><br>
        Email : <?=$res[0][5]?><br>
    </div>
</div>