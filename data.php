<?php
     require_once("./models/shop.php");
     require_once("./models/product.php");
     require_once("./models/detailsproductfood.php");
     require_once("./models/deteilsproductobject.php");

    $shop1 = new Shop ("Fattoria degli animali", "fattoriadeglianimali@gmail.com", "/https/FattoriaDegliAnimali.com");

    $product1 = new Product ("https://i.natgeofe.com/n/4f5aaece-3300-41a4-b2a8-ed2708a0a27c/domestic-dog_thumb_square.jpg?w=136&h=136", "cat", "toys", "ball", 5);

    $detailsFood = new DetailsProductFood ("https://www.essiccare.com/wp-content/uploads/2019/02/DSC_2781-768x512.jpg", "dog", "food", "dry meat", "22", "01/01/2026" , "000000");

    $detailsObject = new DetailsProductObject ("https://as2.ftcdn.net/v2/jpg/05/46/57/61/1000_F_546576148_CnjaWRENfVZiKTqtvx0UPW19rPvW9GQT.jpg", "cat", "toy", "duck", "18", "yellow" , "medium");


