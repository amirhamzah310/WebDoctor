<div class="nav">
    <div class="menuKiri">
        <p id="halonama">Halo, <?=$nama?>!</p>
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
    <h1 class="judul">Silahkan pilih gejala yang Anda alami</h1>
    <div id="pilih">
        <!-- <form action="penyakit" method="post"> -->
            <?php
                foreach ($res as $key => $value) {
                    echo '<input type="checkbox" name='.$value[0].'>'.$value[0];
                }
            ?>
            <a href="#popup"><button type="submit" data-target="popup" id="btnMulai">Mulai</button></a>
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