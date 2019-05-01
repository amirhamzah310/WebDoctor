<?php
    $url = $_SERVER['REDIRECT_URL'];
    $baseURL = '/WebDoctor/Proyek Akhir';
    if($_SERVER['REQUEST_METHOD']=="GET"){
        switch ($url) {
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