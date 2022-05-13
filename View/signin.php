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

<?php
include 'footer.php'
?>