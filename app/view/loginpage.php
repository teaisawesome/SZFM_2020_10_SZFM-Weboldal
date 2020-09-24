<form action="/SZFM_2020_10_SZFM-Weboldal/app/loginvalidation" method="post">
    <h1>Login</h1>
    <label>E-mail:</label>
    <input type="text" name="email" id="login-email-txt" placeholder="...">
    <p name="login-email-error" style="color: red"><?php
        if(isset($_SESSION['login_errors']))
        {
            if($_SESSION['login_errors'][0])
            {
                echo "Kérlek e-mail formátumot adj meg!";
            }
        }
    ?></p>
    <label>Jelszó:</label>
    <input type="text" name="pwd" id="login-pwd-txt" placeholder="...">
    <p name="login-pwd-error" style="color: red"><?php 
        if(isset($_SESSION['login_errors']))
        {
            if($_SESSION['login_errors'][1])
            {
                echo "A jelszó mező kitöltése kötelező!";
            }
        }
    ?></p>
    <input type="submit" value="Belépés">
</form>