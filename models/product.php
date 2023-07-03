<?php
    class Product {

        private $productImage;
        private $petCategory;
        private $tipology;
        private $productName;
        private $productPrice;

        public function __construct ($productImage, $petCategory, $tipology, $productName, $productPrice) {
            $this -> setProductImage($productImage);
            $this -> setpetCategory($petCategory);
            $this -> setTipology($tipology);
            $this -> setproductName($productName);
            $this -> setproductPrice($productPrice);
        }

        public function getProductImage() {
            return $this -> productImage;
        } public function setProductImage($productImage) {
            $this -> productImage = $productImage;
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