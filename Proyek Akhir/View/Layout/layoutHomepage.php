<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyek Ahkhir WebDoctor</title>
    <link rel="stylesheet" href="View/Style/style.css">
    <script src="View/Script/script.js" defer></script>
    <script src="View/Script/SignUp.js" defer></script>
    <!-- <script src="View/Script/ajaxHome.js" defer></script> -->
</head>

<body>
    <div class="nav">
        <div class="menuKiri">
            <a href="profile">
                <?php
                    echo "<img src='View/Style/uploads/".$profil[0][0]."' id='pp'>";
                ?>
                <p id="halonama">Halo, <?=$nama?>!</p>
            </a>
        </div>
        <div class="menuKanan">
            <a href="homepage">Home</a>
            <span id="pembatas">|</span>
            <a href="riwayat">Lihat Riwayat Penyakit</a>
            <span id="pembatas">|</span>
            <a href="logout">Logout</a>
        </div>
    </div>
    <div class="blok"></div>
    <div id="konten">
        <?=$content?>
    </div>
</body>
</html>