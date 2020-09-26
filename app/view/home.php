<div class="container">
    <h1>Hello World! 🚀</h1>
    <h2>Üdvözöllek a <strong>SZFM<strong> index oldalán!</h2>

    <form action="/SZFM_2020_10_SZFM-Weboldal/app/logout" method="post">
    <?php
        if(isset($_SESSION['logged']) && $_SESSION['user'])
        {
            echo "<p>Belépet felhasználó: " . $_SESSION['user'] . "</p>";

            echo "<input class='btn btn-warning' type='submit' value='Kilépés'/>";
        }
        else
        {
            echo "<a class='btn btn-info' href='http://localhost/SZFM_2020_10_SZFM-Weboldal/app/login'>Belépés</a>";
        }
    ?>
    </form>
</div>