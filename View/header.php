<link rel="stylesheet" href="../styles/home.css">
<section class="black-section">
    <!--nav bar-->
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href=""><img src="../images/logo.png"> Lgear </a>

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
                            <a class="dropdown-item" href="#">Acer</a>
                            <a class="dropdown-item" href="#">Asus</a>
                            <a class="dropdown-item" href="#">MSI</a>
                        </div>
                    <li class="nav-item">
                        <a class="nav-link" href="">Macbook</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=signin">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" title="View your shopping cart"><img src="../images/shopping-cart.png"></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!--Carousel-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-50 carousel-image" src="../images/slideImg1.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-50 carousel-image" src="../images/slideImg3.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-50 carousel-image" src="../images/slideImg2.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--Grid-->
    <div>
        <div class="section-heading">
            <h2>LAPTOP GAMING</h2>
        </div>

        <div class="container-fluid lap-secion">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img class="card-img-top capImg" src="../images/acerCapture.PNG">
                        <div class="card-body">
                            <a href="">
                                <p class="card-text buy-mess">Buy now >></p>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img class="card-img-top capImg" src="../images/asusCapture.PNG">
                        <div class="card-body">
                            <a href="">
                                <p class="card-text buy-mess">Buy now >></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img class="card-img-top capImg" src="../images/msiCapture.PNG">
                        <div class="card-body">
                            <a href="">
                                <p class="card-text buy-mess">Buy now >></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>