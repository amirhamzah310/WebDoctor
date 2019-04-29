<?php
    class Kategori{
        public $id;
        public $jenisKeluhan;
        
        function __construct($id, $keluhan){
            $this->id = $id;
            $this->jenisKeluhan = $keluhan;
        }
    }
?>