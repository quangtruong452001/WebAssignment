<?php
// require MySQL Connection
require ('../Model/DBController.php');

// require Product Class
require ('../Model/Product.php');



// DBController object
$db = new DBController();

// Product object
$product = new Product($db);
//print_r($product->getData());