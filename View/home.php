<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LGear</title>

    <!-- GGFontCSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Ubuntu:wght@300&display=swap" rel="stylesheet" />


    <!--    Boostrap link-->
    <!--    CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--    JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Icon -->
    <script src="https://kit.fontawesome.com/371aa0c399.js" crossorigin="anonymous"></script>

    <!--    Icon web-->
    <link rel="icon" href="https://img.icons8.com/small/16/000000/shopping-basket.png">

    <!--    CSS file-->
    <link rel="stylesheet" href="../styles/home.css">
    <link rel="stylesheet" href="../styles/signin.css">

</head>

<body>
    <?php
    include 'header.php';
    ?>
    <section class="white-section">
        <div class="mac-section">
            <div class="section-heading">
                <h2>MACBOOK</h2>
                <a href="">
                    <p class="card-text buy-mess">Buy now >></p>
                </a>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="../images/macCap1.png">
                    </div>
                    <div class="col-lg-6">
                        <img src="../images/macCap2.png">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php
    error_reporting(0);
    if ($_GET['page']) {
        require_once($_GET['page'] . ".php");
    }
    ?>
    <!--Footer-->
    <?php
    include 'footer.php';
    ?>
</body>

</html>