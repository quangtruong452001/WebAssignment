<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");

// require MySQL Connection
require('../Model/DBController.php');

// require Product Class
require('../Model/Product.php');

//require Cart class
require('../Model/Cart.php');


// DBController object
$db = new DBController();

// Product object
$product = new Product($db);
//print_r($product->getData());

//Cart object
$Cart = new Cart($db);

//new function

//user id
$id=1;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['crud_req'] == 'register') {
    registerUser($db);
} else if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['crud_req'] == 'login') {

    $id = login($db);
}
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
    $pwd = password_hash($pwd, PASSWORD_DEFAULT);
    $sql = "Insert into users VALUES ('','$name','$email','$pwd');";
    if (mysqli_query($db->con, $sql)) {
        echo "Congralutions";
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($db->con);
    }
}

//signin
function login($db)
{
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $sql = "select pwd,id from users where email=?;";
    $stmt = $db->con->stmt_init();
    if (!$stmt->prepare($sql))
        http_response_code(400, "Something went wrong");
    if (empty($email) || empty($pwd)) {
        http_response_code(401);
        echo "All fields need to be filled!!!";
        exit();
    }
    $stmt->bind_param('s', $email);
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();
        $isValid = password_verify($pwd, $data['pwd']);
        if ($isValid) {
            $key = password_hash($email, PASSWORD_DEFAULT);
            $_SESSION[$key] = $email;
            setcookie('user', $key);
            http_response_code(200);
        } else {
            http_response_code(401);
            echo "Invalid user name or password";
        }
    }
    return $data['id'];
}
