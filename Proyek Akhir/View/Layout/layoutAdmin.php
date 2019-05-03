<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyek Akhir WebDoctor</title>
    <link rel="stylesheet" href="View/Style/style.css">
    <script src="View/Script/script.js" defer></script>
    <script src="View/Script/SignUp.js" defer></script>    
</head>
<body>
    <div class="nav">    
        <div class="menuKanan">
            <a href="logout">Logout</a>
        </div>
    </div>    
    <div class="menu">
            <a href="admin">All</a>
            <span id="pembatas">|</span>
            <a href="viewPenyakit">Penyakit</a>
            <span id="pembatas">|</span>
            <a href="viewGejala">Gejala</a>
            <span id="pembatas">|</span>
            <a href="viewKategori">Kategori</a>
            <span id="pembatas">|</span>
            <a href="updateHubungan">Update</a>
    </div>
    <div class="blok"></div>
    <div>        
        <?=$content?>    
    </div>
</body>
</html>