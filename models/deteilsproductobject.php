<?php
        class DetailsProductObject extends Product {
            private $color;
            private $size;
    
            public function __construct (
               $productImage, $petCategory, $tipology, $productName, $productPrice, $weight, $color, $size
            ) {
                parent :: __construct ($productImage, $petCategory, $tipology, $productName,  $productPrice, $weight);
    
                $this -> setColor($color);
                $this -> setSize($size);
            }
    
            public function getColor() {
                return $this -> color;
            } public function setColor($color) {
                $this -> color = $color;
            }
    
            public function getSize() {
                return $this -> size;
            } public function setSize($size) {
                $this -> size = $size;
            }
    
        };