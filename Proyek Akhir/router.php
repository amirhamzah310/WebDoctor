<?php
    $url = $_SERVER['REDIRECT_URL'];
    $baseURL = '/WebDoctor/Proyek Akhir';
    if($_SERVER["REQUEST_METHOD"]=="GET"){
        switch ($url) {
            case $baseURL."/signup":
                require_once "Controller/loginController.php";
                $log = new LoginController();
                echo $log->sign();
                break;
            case $baseURL."/index.php":
                require_once "Controller/loginController.php";
                $log = new LoginController();
                echo $log->start();
                break;
            default:
                echo '404 not found';
                break;
        }
    }
    else if($_SERVER["REQUEST_METHOD"]=="POST"){
        switch ($url) {
            case $baseURL."/addUser":
                require_once "Controller/loginController.php";
                $sign = new LoginController();
                echo $sign->signUp();
                header('');
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