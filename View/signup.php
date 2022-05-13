<?php
include 'header.php'
?>
<link rel="stylesheet" href="../styles/signin.css">
<div class="container" id="layout-page-login">
    <div class="row justify-content-md-center">
        <div class="col-md-6 col">
            <h2 id="tittle-login">Login</h2>
            <div class="loginbox">
                <form method="post" action="">
                    <div class="input-group margin-bottom-sm">
                        <span class="input-group-addon"> <i class="fa fa-address-book-o  fa-fw"></i></span>


                        <input class="form-control" type="text" placeholder="Your name">
                    </div>
                    <div class="input-group margin-bottom-sm">
                        <span class="input-group-addon"> <i class="fa fa-envelope  fa-fw"></i></span>


                        <input class="form-control" type="text" placeholder="Your email">
                    </div>
                    <div class="input-group margin-bottom-sm">
                        <span class="input-group-addon"> <i class="fa fa-lock fa-fw"></i></span>
                        <label for="password"></label>
                        <input class="form-control" id="password" type="password">
                    </div>
                    <div class="action_button text-center">
                        <button class="" type="submit"> Sign up</button>
                    </div>
                    <div class="text-center">
                        <a href="#"> already have account?</a>

                    </div>
                </form>
            </div>
        </div>

    </div>

</div>

<?php
include 'footer.php'
?>