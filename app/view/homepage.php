<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/Home-Style.css">
    <title>EgeszsegKozpont</title>
</head>
<body>
    <nav style="overflow:auto">
        <div class="logo">
            <img id="logoKep" src="resources/images/logoeredeti.png"/>
        </div>
            <div id="szoveg">
                <p id="szfm" class="fancy">SZFM</p>
                <p id="egeszseg" class="fancy2">Egészség&nbsp;és&nbsp;Wellnessközpont</p>
            </div>
    
            <form action="registvalidation" method="post" style="margin:0;padding:0;">
                <ul class="nav-links">
                    <li class="name-form">
                        <a href="#">
                            <input type="text" name="name" autocomplete="off" required />
                            <label for="name" class="label-name">
                                <em class="content-name">Név</em>
                                <p class="regErrorMessage"></p>
                            </label>
                        </a>
                    </li>
                    <li class="address-form">
                        <a href="#">
                            <input type="text" name="address" autocomplete="off" required />
                            <label for="address" class="label-address">
                                <em class="content-address">Cím</em>
                                <p class="regErrorMessage"></p>
                            </label>
                        </a>
                    </li>
                    <li class="password-form">
                        <a href="#">
                            <input type="password" name="pwd" autocomplete="off" required />
                            <label for="password" class="label-password">
                                <em class="content-password">Jelszó</em>
                                <p class="regErrorMessage"></p>
                            </label>
                        </a>
                    </li>
                    <li class="email-form">
                        <a href="#">
                            <input type="text" name="email" autocomplete="off" required />
                            <label for="email" class="label-email">
                                <em class="content-email">E-mail cím</em>
                                <p class="regErrorMessage"></p>
                            </label>
                        </a>
                    </li>
                    <li class="phone-form">
                        <a href="#">
                            <input type="text" name="phone" autocomplete="off" required />
                            <label for="phone" class="label-phone">
                                <em class="content-phone">Telefonszám</em>
                                <p class="regErrorMessage"></p>
                            </label>
                        </a>
                    </li>
                    <li class="nav-buttonReg">
                        <button type="submit" class="btn regButton">Regisztráció</button>
                    </li>
                </ul>
            </form>
        
            <form action="loginvalidation" method="post" style="margin:0;padding:0;">
                <ul class="nav-linksBel">
                    <li class="email-form">
                        <a href="#">
                            <input type="text" name="email" autocomplete="off" required />
                            <label for="email" class="label-email">
                                <em class="content-email">E-mail cím</em>
                                <p class="loginErrorMessage"></p>
                            </label>
                        </a>
                        
                    </li>
                    <li class="password-form">    
                        <a href="#">
                            <input type="text" name="pwd" autocomplete="off" required />
                            <label for="password" class="label-password">
                                <em class="content-password">Jelszó</em>
                                <p class="loginErrorMessage"></p>
                            </label>
                        </a>
                    </li>
                    <li class="nav-buttonReg">
                        <button type="submit" class="btn belButton">Belépés</button>
                    </li>
                </ul>
            </form>
    
            <div id="regBel">
                <div class="burger">
            
                    <p id="regiszterGomb" class="kettes">Regisztráció</p>
                </div>
                <div class="burger2">
                    <p id="belepesGomb" class="egyes" >Belépés</p> 
                </div>
            </div>
    </nav>


    <div class="flex-container">
        <!--Edzésterv Generátor Menü-->
        <div class="container">
            <img src="resources/images/Training.jpg" alt="Avatar" class="image" >
            <div class="middle">
                <button class="button button1">Edzésterv Generátor</button>
                <p id="edz">Készíts saját edzéstervet az általad összegyűjtött gyakorlatokból</p>
            </div>
        </div>
        <!--Kalória Számláló Menü-->
        <div class="container">
            <img src="resources/images/Kaloria.jpg" alt="Avatar" class="image" >
            <div class="middle">
                <button class="button button2">Kalória Számláló</button>
                <p id="kal">Számold ki a napi kalória szükségletedet</p>
            </div>
        </div>
        <!--Web Shop Menü-->
        <div class="container">
            <img src="resources/images/WebShop.jpg" alt="Avatar" class="image" >
            <div class="middle">
                <button class="button button3">Web Shop</button>
                <p id="vas">Vásárold meg az aktuális termékeinket a legkedvezőbb áron</p>
            </div>
        </div>
        <!--Egyéb Szolgáltatások Menü-->
        <div class="container">
            <img src="resources/images/Services.jpg" alt="Avatar" class="image" >
            <div class="middle">
                <button class="button button4">Egyéb Szolgáltatások</button>
                <p id="szol">Tekintsd meg az SZFM egyéb szolgáltatásait is</p>
            </div>
        </div>
    </div>
    <div class="flex-container2">
        <!--Galéria Menü-->
        <div id="BelowMenu"class="container">
            <img src="resources/images/Galery.jpg" alt="Avatar" class="image" >
            <div class="middle">
                <button class="button button5">Galéria</button>
                <p id="gal">Nyerj betekintést az SZFM sziget csodálatos pillanatiba</p>
            </div>
        </div>
        <!--Rólunk Menü-->
        <div id="BelowMenu" class="container">
            <img src="resources/images/Rolunk.jpg" alt="Avatar" class="image">
            <div class="middle">
                <button class="button button5">Rólunk</button>
                <p id="ceg">Ha többet szeretnél tudni a cégről</p>
            </div>
        </div>
        <!--Kapcsolat Menü-->
        <div id="BelowMenu" class="container">
            <img src="resources/images/Kapcsolat.jpg" alt="Avatar" class="image" >
            <div class="middle">
                <button class="button button5">Kapcsolat</button>
                <p id="kap">Felkeltettük az érdeklődésedet akkor bátran kérdezz minket</p>
            </div>
        </div>
    </div>
    
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineLite.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/CSSPlugin.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenLite.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>