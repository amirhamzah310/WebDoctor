<?php
    class Admin{
        public $id;
        public $kodePenyakit;
        public $namaPenyakit;
        public $kodeGejala;
        public $namaGejala;
        public $kodeKategori;
        public $namaKategori;
        
        function __construct($id, $kodePenyakit, $namaPenyakit, $kodeGejala, $namaGejala, $kodeKategori, $namaKategori){
            $this->id = $id;
            $this->kodePenyakit = $kodePenyakit;
            $this->namaPenyakit = $namaPenyakit;
            $this->kodeGejala = $kodeGejala;
            $this->namaGejala = $namaGejala;
            $this->kodeKategori = $kodeKategori;
            $this->namaKategori = $namaKategori;
        }
    }
?>