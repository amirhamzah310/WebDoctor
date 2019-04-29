<?php
    class Riwayat{
        public $tanggal;
        public $namaPenyakit;
        public $namaKategori;
        public $namaGejala;
        
        function __construct($id, $namaPenyakit, $namaKategori, $namaGejala){
            $this->id = $id;
            $this->namaPenyakit = $namaPenyakit;
            $this->namaKategori = $namaKategori;
            $this->namaGejala = $namaGejala;
        }
    }
?>