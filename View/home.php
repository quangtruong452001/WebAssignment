<?php
include 'header.php';
?>
<body>

    <section class="black-section">
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
    <!--Footer-->
    <?php
    include 'footer.php';
    ?>
</body>

</html>