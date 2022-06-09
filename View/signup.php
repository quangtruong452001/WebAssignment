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
</head>
<link rel="stylesheet" href="../styles/signin.css">
<div class="container" id="layout-page-login">
    <div class="row justify-content-md-center">
        <div class="col-md-6 col">
            <h2 id="tittle-login">Sign up</h2>
            <div class="loginbox">
                <form method="post" onsubmit="return false;">
                    <div class="input-group margin-bottom-sm">
                        <span class="input-group-addon"> <i class="fa fa-address-book-o  fa-fw"></i></span>
                        <input class="form-control" type="text" placeholder="Name" name="name">
                    </div>
                    <div class="input-group margin-bottom-sm">
                        <span class="input-group-addon"> <i class="fa fa-envelope  fa-fw"></i></span>
                        <input class="form-control" type="text" placeholder="Email" name="email">
                    </div>
                    <div class="input-group margin-bottom-sm">
                        <span class="input-group-addon"> <i class="fa fa-lock fa-fw"></i></span>
                        <label for="password"></label>
                        <input class="form-control" id="password" type="password" placeholder="Password" name="password">
                    </div>
                    <div class="input-group">
                        <!-- <label for=""></label> -->
                        <input type="hidden" name="crud_req" value="register">
                    </div>
                    <div class="action_button text-center">
                        <button class="" type="submit"> Sign up</button>
                    </div>
                    <div class="text-center">
                        <a href="#"> Already have account?</a>
                    </div>
                </form>
            </div>
        </div>

    </div>

</div>
<script src="./signup.js"></script>
<?php
include 'footer.php'
?>