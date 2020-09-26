<div class="container" style="padding: 2rem; margin-top: 2rem;">
    <form action="/SZFM_2020_10_SZFM-Weboldal/app/registvalidation" method="post">
        <h1 style="color: #17a2b8">Regisztráció</h1>
        <h3 style="color: brown"><?php
            if(isset($_SESSION['regist_errors']['registErrorMessage']))
            {
                echo $_SESSION['regist_errors']['registErrorMessage'];
            }
        ?></h3>
        <div class="form-group" style="text-align: left">
            <label style="text-align: left">Név:</label>
            <input class="form-control" type="text" name="name" id="login-email-txt" placeholder="...">
            <p name="login-name-error" style="color: red"><?php
                if(isset($_SESSION['regist_errors']['nameErrorMessage']))
                {
                    echo $_SESSION['regist_errors']['nameErrorMessage'];
                }
            ?></p>
        </div>
        <div class="form-group" style="text-align: left">
            <label>Lakhely:</label>
            <input class="form-control" type="text" name="address" id="login-pwd-txt" placeholder="...">
            <p name="login-address-error" style="color: red"><?php 
                if(isset($_SESSION['regist_errors']['addressErrorMessage']))
                {
                    echo $_SESSION['regist_errors']['addressErrorMessage'];
                }
            ?></p>
        </div>
        <div class="form-group" style="text-align: left">
            <label>E-mail:</label>
            <input class="form-control" type="text" name="email" id="login-pwd-txt" placeholder="...">
            <p name="login-email-error" style="color: red"><?php 
                if(isset($_SESSION['regist_errors']['emailErrorMessage']))
                {
                    echo $_SESSION['regist_errors']['emailErrorMessage'];
                }
            ?></p>
        </div>
        <div class="form-group" style="text-align: left">
            <label>Telefon:</label>
            <input class="form-control" type="text" name="phone" id="login-pwd-txt" placeholder="...">
            <p name="login-phone-error" style="color: red"><?php 
                if(isset($_SESSION['regist_errors']['phoneErrorMessage']))
                {
                    echo $_SESSION['regist_errors']['phoneErrorMessage'];
                }
            ?></p>
        </div>
        <div class="form-group" style="text-align: left">
            <label>Jelszó:</label>
            <input class="form-control" type="text" name="pwd" id="login-pwd-txt" placeholder="...">
            <p name="login-pwd-error" style="color: red"><?php 
                if(isset($_SESSION['regist_errors']['passwordErrorMessage']))
                {
                    echo $_SESSION['regist_errors']['passwordErrorMessage'];
                }
            ?></p>
        </div>

        <input class="btn btn-info" type="submit" value="Regisztáció">
    </form>
</div>