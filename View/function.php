<?php
header("Access-Control-Allow-Origin: *");
// require MySQL Connection
require('../Model/DBController.php');

// require Product Class
require('../Model/Product.php');



// DBController object
$db = new DBController();

// Product object
$product = new Product($db);
//print_r($product->getData());


//new function



if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['crud_req'] == 'register') {
    registerUser($db);
}

//resisterUser
function registerUser($db)
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    if (empty($name) || empty($email) || empty($pwd)) {
        http_response_code(401);
        echo "All fields need to be filled!!!";
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "bad email address";
        exit();
    }
    $sql = "Insert into users VALUES ('','$name','$email','$pwd');";
    if (mysqli_query($db->con, $sql)) {
        echo "Congralutions";
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($db->con);
    }
}
