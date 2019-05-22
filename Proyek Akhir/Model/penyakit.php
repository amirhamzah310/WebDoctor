<?php
    class Penyakit{
        public $kdPenyakit;
        public $namaPenyakit;
        
        function __construct($kdPenyakit, $namaPenyakit){
            $this->kdPenyakit = $kdPenyakit;
            $this->namaPenyakit = $namaPenyakit;
        }
    }
?>