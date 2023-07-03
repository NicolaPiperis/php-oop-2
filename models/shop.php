<?php

    class Shop {
            private $shopName;
            private $shopMail;
            private $shopWebsite;
            
            public function __construct ($shopName, $shopMail, $shopWebsite) {
                $this -> setshopName($shopName);
                $this -> setshopMail($shopMail);
                $this -> setshopWebsite($shopWebsite);
            }

            public function getshopName() {
                return $this -> shopName;
            } public function setshopName($shopName) {
                $this -> shopName = $shopName;
            }

            public function getshopMail() {
                return $this -> shopMail;
            } public function setshopMail($shopMail) {
                $this -> shopMail = $shopMail;
            }

            public function getshopWebsite() {
                return $this -> shopWebsite;
            } public function setshopWebsite($shopWebsite) {
                $this -> shopWebsite = $shopWebsite;
            }

        }