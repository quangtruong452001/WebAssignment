<!--<!doctype html>-->
<!--<html lang="en">-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- GGFontCSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Ubuntu:wght@300&display=swap" rel="stylesheet" />


    <!--    Boostrap link-->
    <!--    CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- Icon -->
    <script src="https://kit.fontawesome.com/371aa0c399.js" crossorigin="anonymous"></script>

    <!--    Icon web-->
    <link rel="icon" href="https://img.icons8.com/small/16/000000/shopping-basket.png">

    <!--    CSS file-->
    <link rel="stylesheet" href="../styles/home.css">
    <!--    <link rel="stylesheet" href="../styles/signin.css">-->

    <!--script -->

    <?php
    // require functions.php file
    require('function.php');
    ?>

</head>
<header>
    <section class="black-section">
        <!--nav bar-->
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="index.php?page=home"><img src="../images/logo.png"> Lgear </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Laptop
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="index.php?page=products&brand=Acer">Acer</a>
                                <a class="dropdown-item" href="index.php?page=products&brand=ASUS">Asus</a>
                                <a class="dropdown-item" href="index.php?page=products&brand=MSI">MSI</a>
                            </div>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=products&brand=Apple">Macbook</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link signin" href="<?php echo isset($_COOKIE['user']) ? "" : "index.php?page=signin"; ?> ">
                                <?php
                                echo isset($_COOKIE['user']) ? "Welcome " : "Sign in";
                                ?>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo isset($_COOKIE['user']) ? "logout" : "signup" ?>" href="<?php echo isset($_COOKIE['user']) ? "index.php?deletesession=logout" : "index.php?page=signup"; ?>" name="crud_req" value="<?php echo isset($_COOKIE['user']) ? "logout" : ""; ?>">
                                <?php
                                echo isset($_COOKIE['user']) ? "Log out" : "Sign up";
                                ?>
                            </a>
                        </li>
                        <li class=" nav-item">
                            <a class="nav-link" href="index.php?page=cart1" title="View your shopping cart"><img src="../images/shopping-cart.png"></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>
</header>