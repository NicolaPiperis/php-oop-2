<?php

    require_once("./models/shop.php");
    require_once("./models/product.php");

    class DetailsProductFood extends Product {
        private $expiry;
        private $productCode;

        public function __construct (
            $petCategory, $tipology, $productName, $productPrice, $expiry, $productCode
        ) {
            parent :: __construct ($petCategory, $tipology, $productName,  $productPrice);

            this -> setExpiry($expiry);
            this -> setProductCode($productCode);
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

    }

    $shop1 = new Shop ("Fattoria degli animali", "fattoriadeglianimali@gmail.com", "/https/FattoriaDegliAnimali.com");

    echo "<br>";

    var_dump($shop1);

    echo "<br>";

    $product1 = new Product ("cat", "toys", "ball", 5);


    var_dump($product1);

    echo "<br>";

?>