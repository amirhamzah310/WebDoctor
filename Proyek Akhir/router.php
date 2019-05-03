<?php
    $url = $_SERVER['REDIRECT_URL'];
    $baseURL = '/WebDoctor/Proyek Akhir';
    if($_SERVER['REQUEST_METHOD']=="GET"){
        switch ($url) {
            case $baseURL."/diagnosa":
                require_once "Controller/penyakitController.php";
                $sakit = new PenyakitController();
                echo $sakit->diagnose();
                break;
            case $baseURL."/about":
                require_once "Controller/aboutController.php";
                $cp = new AboutController();
                echo $cp->show();
                break;
            case $baseURL."/viewGejala":
                require_once "Controller/gejalaController.php";
                $log = new GejalaController();
                echo $log->showGejala();
                break;
            case $baseURL."/viewAddGejala":
                require_once "Controller/gejalaController.php";
                $gej = new GejalaController();
                echo $gej->add();                
                break;
            case $baseURL."/viewPenyakit":
                require_once "Controller/penyakitController.php";
                $log = new PenyakitController();
                echo $log->showPenyakit();
                break;
            case $baseURL."/viewAddPenyakit":
                require_once "Controller/penyakitController.php";
                $peny = new PenyakitController();
                echo $peny->add();                
                break;
            case $baseURL."/viewKategori":
                require_once "Controller/kategoriController.php";
                $log = new KategoriController();
                echo $log->showKategori();
                break;
            case $baseURL."/viewAddKategori":
                require_once "Controller/kategoriController.php";
                $kat = new KategoriController();
                echo $kat->add();                
                break;
            case $baseURL."/viewUpdate":
                require_once "Controller/updateController.php";
                $log = new UpdateController();
                echo $log->showUpdate();
                break;
            case $baseURL."/logout":
                require_once "Controller/loginController.php";
                $out = new LoginController();
                echo $out->logout();
                header('Location: index.php');
                break;
            case $baseURL."/profile":
                require_once "Controller/profileController.php";
                $pp = new ProfileController();
                echo $pp->control();
                break;
            case $baseURL."/gejala":
                require_once "Controller/gejalaController.php";
                $gejala = new GejalaController();
                echo $gejala->show();
                break;
            case $baseURL."/homepage":
                require_once "Controller/homeController.php";
                $home = new HomeController();
                echo $home->start();
                break;
            case $baseURL."/forgot":
                require_once "Controller/loginController.php";
                $lupa = new LoginController();
                echo $lupa->forgot();
                break;
            case $baseURL."/signup":
                require_once "Controller/signUpController.php";
                $log = new SignUpController();
                echo $log->sign();
                break;
            case $baseURL."/login":
                require_once "Controller/loginController.php";
                $log = new LoginController();
                echo $log->start();
                break;
            case $baseURL."/riwayat":
                require_once "Controller/riwayatController.php";
                $log = new RiwayatController();
                echo $log->start();
                break;
            case $baseURL."/admin":
                require_once "Controller/adminController.php";
                $log = new AdminController();
                echo $log->start();
                break;            
            default:
                echo '404 not found';
                break;
        }
    }
    else if($_SERVER['REQUEST_METHOD']=="POST"){
        switch ($url) {
            case $baseURL."/tambahGejala":
                require_once "Controller/gejalaController.php";
                $addGej = new GejalaController();
                echo $addGej->addGejala();
                header('Location: viewGejala');
                break;            
            case $baseURL."/tambahPenyakit":
                require_once "Controller/penyakitController.php";
                $addPeny = new PenyakitController();
                echo $addPeny->addPenyakit();
                header('Location: viewPenyakit');
                break;
            case $baseURL."/tambahKategori":
                require_once "Controller/kategoriController.php";
                $addKat = new KategoriController();
                echo $addKat->addKategori();
                header('Location: viewKategori');
                break;
            case $baseURL."/updateHubungan":
                require_once "Controller/updateController.php";
                $update = new UpdateController();
                echo $update->updateHubungan();
                header('Location: admin');
                break;
            case $baseURL."/deleteAkun":
                require_once "Controller/loginController.php";
                $log = new LoginController();
                echo $log->deleteAkun();
                header('Location: index.php');
                break;
            case $baseURL."/reset":
                require_once "Controller/fileController.php";
                $file = new FileController();
                echo $file->reset();
                header('Location: homepage');
                break;
            case $baseURL."/upload":
                require_once "Controller/fileController.php";
                $file = new FileController();
                echo $file->upload();
                break;
            case $baseURL."/updatepassword":
                require_once "Controller/loginController.php";
                $baru = new LoginController();
                echo $baru->updatePass();
                header('Location: index.php');
                break;
            case $baseURL."/addUser":
                require_once "Controller/signUpController.php";
                $sign = new SignUpController();
                echo $sign->signUp();
                header('Location: index.php');
                break;
            case $baseURL."/signin":
                require_once "Controller/loginController.php";
                $log = new LoginController();
                echo $log->auth();
                break;
            default:
                echo '404 not found';
                break;
        }
    }
?>