<?php



$URL = explode("/", $_SERVER['QUERY_STRING']);
if (isset($_GET['deletesession'])) {
    unset($_SESSION['user']);
    setcookie('user', false);
    header('Location: index.php?page=home.php');
}
if (isset($_GET['brand'])) {
    echo ($_GET['brand']);

    $brand = $_GET['brand']; // Getting parameter value inside PHP variable
    header("Location: products.php?brand={$brand}");
} else if (isset($_GET['page'])) {

    //echo ($_GET['page']);
    $name = $_GET['page'];
    if ($name != "product_description") {
        require_once($name . ".php");
    }
} else {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
