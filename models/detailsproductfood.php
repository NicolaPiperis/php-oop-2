<?php
    class DetailsProductFood extends Product {
        private $expiry;
        private $productCode;

        public function __construct (
            $productImage, $petCategory, $tipology, $productName, $productPrice,
            $weight,
            $expiry, $productCode
        ) {
            parent :: __construct ($productImage, $petCategory, $tipology, $productName,  $productPrice, $weight);

            $this -> setExpiry($expiry);
            $this -> setProductCode($productCode);
        }

        public function getExpiry() {
            return $this -> expiry;
        } public function setExpiry($expiry) {
            $this -> expiry = $expiry;
        }

        public function getProductCode() {
            return $this -> productCode;
        } public function setProductCode($productCode) {
            $this -> productCode = $productCode;
        }

    };