<?php
    class SignUP{
        public $username;
        public $nama;
        public $tanggal;
        public $alamat;
        public $email;
        public $pss;
        public $peran;

        function __construct($a,$b,$c,$d,$e,$f,$g){
            $this->username=$a;
            $this->nama=$b;
            $this->tanggal=$c;
            $this->alamat=$d;
            $this->email=$e;
            $this->pss=$f;
            $this->peran=$g;
        }
    }
?>