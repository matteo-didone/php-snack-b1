<?php 

    require_once __DIR__ . '/Garment.php';
    class Hat extends Garment{
        public String $hatType;

        public function __construct($material, $hatType) {
            parent::__construct($material);
            $this->hatType = $hatType;
        }
    }
?>