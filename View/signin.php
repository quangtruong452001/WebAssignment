<?php
include 'header.php'
?>

<head>
    <meta charset="UTF-8">
    <title>Apple products</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--            Boostrap link-->
    <!--            CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--            JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body>
    <link rel="stylesheet" href="../styles/signin.css">
    <div class="container" id="layout-page-login">
        <div class="row justify-content-md-center">
            <div class="col-md-6 col">
                <h2 id="tittle-login">Login</h2>
                <div class="loginbox">
                    <form method="post" action="">
                        <div class="input-group margin-bottom-sm">
                            <span class="input-group-addon"> <i class="fa fa-envelope fa-fw"></i></span>


                            <input class="form-control" type="text" placeholder="Email address">
                        </div>
                        <div class="input-group margin-bottom-sm">
                            <span class="input-group-addon"> <i class="fa fa-lock fa-fw"></i></span>
                            <label for="password"></label>
                            <input class="form-control" id="password" type="password">
                        </div>
                        <div class="action_button text-center">
                            <button class="" type="submit"> Login</button>
                        </div>
                        <div class="text-center">
                            <a href="#"> Forgot password?</a>
                            <button>Sign up</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>


</body>

<?php
include 'footer.php'
?>