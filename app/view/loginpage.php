<div class="container" style="padding: 2rem; margin-top: 2rem;">
    <form action="/SZFM_2020_10_SZFM-Weboldal/app/loginvalidation" method="post">
        <h1>Belépés</h1>
        <h3 style="color: brown"><?php
            if(isset($_SESSION['login_errors']['loginErrorMessage']))
            {
                echo $_SESSION['login_errors']['loginErrorMessage'];
            }
        ?></h3>
        <div class="form-group" style="text-align: left">
            <label style="text-align: left">E-mail:</label>
            <input class="form-control" type="text" name="email" id="login-email-txt" placeholder="...">
            <p name="login-email-error" style="color: red"><?php
                if(isset($_SESSION['login_errors']['emailErrorMessage']))
                {
                    echo $_SESSION['login_errors']['emailErrorMessage'];
                }
            ?></p>
        </div>
        <div class="form-group" style="text-align: left">
            <label>Jelszó:</label>
            <input class="form-control" type="text" name="pwd" id="login-pwd-txt" placeholder="...">
            <p name="login-pwd-error" style="color: red"><?php 
                if(isset($_SESSION['login_errors']['passwordErrorMessage']))
                {
                    echo $_SESSION['login_errors']['passwordErrorMessage'];
                }
            ?></p>
        </div>
        <input class="btn btn-success" type="submit" value="Belépés">
    </form>
</div>