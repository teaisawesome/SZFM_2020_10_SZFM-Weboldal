<form action="/SZFM_2020_10_SZFM-Weboldal/app/loginvalidation" method="post">
    <h1>Login</h1>
    <h3 style="color: brown"><?php
        if(isset($_SESSION['login_errors']['loginErrorMessage']))
        {
            echo $_SESSION['login_errors']['loginErrorMessage'];
        }
    ?></h3>
    <label>E-mail:</label>
    <input type="text" name="email" id="login-email-txt" placeholder="...">
    <p name="login-email-error" style="color: red"><?php
        if(isset($_SESSION['login_errors']['emailErrorMessage']))
        {
            echo $_SESSION['login_errors']['emailErrorMessage'];
        }
    ?></p>
    <label>Jelszó:</label>
    <input type="text" name="pwd" id="login-pwd-txt" placeholder="...">
    <p name="login-pwd-error" style="color: red"><?php 
        if(isset($_SESSION['login_errors']['passwordErrorMessage']))
        {
            echo $_SESSION['login_errors']['passwordErrorMessage'];
        }
    ?></p>
    <input type="submit" value="Belépés">
</form>