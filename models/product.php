<?php
    class Product {

        private $petCategory;
        private $tipology;
        private $productName;
        private $productPrice;

        public function __construct ($petCategory, $tipology, $productName, $productColor, $productPrice) {
            $this -> setpetCategory($petCategory);
            $this -> setTipology($tipology);
            $this -> setproductName($productName);
            $this -> setproductPrice($productPrice);
        }

        public function getpetCategory() {
            return $this -> petCategory;
        } public function setpetCategory($petCategory) {
            $this -> petCategory = $petCategory;
        }

        public function getTipology() {
            return $this -> tipology;
        } public function setTipology($tipology) {
            $this -> tipology = $tipology;
        }

        public function getproductName() {
            return $this -> productName;
        } public function setproductName($productName) {
            $this -> productName = $productName;
        }

        public function getproductPrice() {
            return $this -> productPrice;
        } public function setproductPrice($productPrice) {
            $this -> productPrice = $productPrice;
        }

    };