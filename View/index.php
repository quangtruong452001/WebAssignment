<?php
$URL = explode("/", $_SERVER['QUERY_STRING']);
$name = $_GET['page'];

if(isset($_GET['brand']))
{
    echo ($_GET['brand']);

    $brand = $_GET['brand']; // Getting parameter value inside PHP variable
    header("Location: products.php?brand={$brand}");

}
else{

//echo ($_GET['page']);


require_once($name.".php");
}