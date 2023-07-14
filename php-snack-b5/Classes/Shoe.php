<?php 

    require_once __DIR__ . '/Garment.php';

    class Shoe extends Garment{

        public String $shoeSize;

        public function __construct(String $material, String $shoeSize) {
            parent::__construct($material);
            $this->shoeSize = $shoeSize;
        }
    }
?>