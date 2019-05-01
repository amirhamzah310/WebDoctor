<div class="nav">
    <div class="menuKiri">
        <a href="profile">
            <?php
                echo "<img src='View/Style/uploads/".$profil."' id='pp'>";
            ?>
            <p id="halonama">Halo, <?=$nama?>!</p>
        </a>
    </div>
    <div class="menuKanan">
        <a href="homepage">Home</a>
        <span id="pembatas">|</span>
        <a href="riwayat">Lihat Riwayat Penyakit</a>
        <span id="pembatas">|</span>
        <a href="index.php">Logout</a>
    </div>
</div>
<div class="blok"></div>
<div class="header">
    <h1 class="judul">Silahkan pilih gejala yang Anda alami</h1>
    <div id="pilih">
        <!-- <form action="penyakit" method="post"> -->
        <?php
                foreach ($res as $key => $value) {
                    echo '<input type="checkbox" name='.$value[0].'>'.$value[0];
                }
            ?>
        <a href="#popup"><button id="btnMulai">Mulai</button></a>
        </form>
    </div>
</div>
<div id="popup">
    <div class="window">
        <a href="#" class="close-button" title="Close">X</a>
        <h2>Berdasarkan gejala yang dipilih, Anda didiagnosa penyakit</h2>
        <span id="sakit"></span>
    </div>
</div>
<script src="View/Script/ajaxpenyakit.js"></script>