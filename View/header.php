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
    <!--    JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

<!--    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <!-- Icon -->
    <script src="https://kit.fontawesome.com/371aa0c399.js" crossorigin="anonymous"></script>

    <!--    Icon web-->
    <link rel="icon" href="https://img.icons8.com/small/16/000000/shopping-basket.png">

    <!--    CSS file-->
    <link rel="stylesheet" href="../styles/home.css">
    <link rel="stylesheet" href="../styles/signin.css">
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
                            <a class="nav-link signin" href="index.php?page=signin">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=signup">Sign Up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=cart1" title="View your shopping cart"><img src="../images/shopping-cart.png"></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>
</header>