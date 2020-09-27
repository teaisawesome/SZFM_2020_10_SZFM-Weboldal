# Tesztelési jegyzőkönyv

## 1.1 Teszt jegyzőkönyv azonosító: 01 Kétsoros Menü

### 1.1.1 Összefoglalás:
A weboldalon el készítettem a Kétsoros Menüsort, ez a honlap kezdő lapján található, ez segíti a felhasználókat navigálni a weboldalon képekkel és leírással. Felül van négy menü opció, mint az Edzésterv Generátor, a Kalória Számláló, a Web Shop és az Egyéb Szolgáltatások. Alul pedig még három menüpont következik, ezek pedig a Galéria, a Kapcsolat, és a Rólunk menüpontok. Minden menü egy képből, egy gombból és egy kis leírásból áll. Ha a felhasználó ráviszi az egeret az egyik menüre, akkor egy animáció után előjön a gomb és a leírás az adott menüpontról. 

### 1.1.2 Általános értékelés:
Az elvállalt feladatot időben siekrült megcsinálni. A weboldal reszponzív részén még van mit fejeleszteni.

### 1.1.3 Eredmények összegzése:
Sikerült mgcsinálni a weboldal menüsorát, ezzel a Kezdőlap egy részét. 

### 1.1.4 Előrehaladás:
A fejlesztés közben sok új ötletre és egyszerűbb kivitelezésre jöttem rá, ezeket a közeljövőben megpróbálom beépíteni.

### 1.1.5 A tevékenység összefoglalása:
Az elkészült menüsorral a felhasználók könnyen tudnak tájékozódni és így hamar megtalálják a számukra szükésges információkat. A weboldal reszponzív, de ez a terület még fejlesztésre szorul a közeljövőben, mert kis ablak méretnél az animációk és a gombok nem reszponzívak.  


## 1.2 Teszt jegyzőkönyv azonosító: 02 Header/Navbar/Login/Registry

### 1.2.1 Összefoglalás:
A header maga egy navbar melyben három fő egységre bontottam a szerkezetet. Ezek: 
- logo
- cégünk alappillére "SZFM Egészség és Wellnessközpont"
- belépés, regisztráció

Navigáció segítségével létrehoztam a regisztracióért illetve a belépésért felelős "Belépés|Regisztráció" gombokat.
Ezek felhasználásával, egy animált sávban a felhasználónak lehetősége nyílik megadni az adatait mind a bejelentkezéshez, mind a regisztrációhoz.
Regisztrációs mezők név szerint: 
- név
- cím
- jelszó
- email
- telefonszám

Belépés mezők név szerint: 
- email
- jelszó

A mezők alatt egy "Belépés|Regisztráció" elfogadást nyújtó gomb található melyek által validáltatni tudják a látogatók magukat vagy új felhasználóként tudnak a rendszerbe bekerülni.

### 1.2.2 Általános értékelés:
Időben végeztem feladatom elkészítésével. Cégünk jelezte a megrendelő felé, hogy a 4 héten belül megrendelt mini projektre egy vázlatot fog kiadni, és a nagy projektre fekteti a fő hansúlyt.
A weboldal működik, használható, átlátható, könnyen kezelhető.

### 1.2.3 Eredmények összegzése: 
A weboldal félig reszponzív, tehát nem. Kinézetén javítani kell. harmóniát kell teremteni a megjelenést illetően, ezt még nem sikerült kivitelezni. 

### 1.2.4 Előrehaladás: 
A weboldal komplett képe feltárult előttem. Nagyobb rálátást nyertem, hogyan és miként valósítsam meg a közeljövőben az eltervezett változtatásokat.

### 1.2.5 A tevékenység összefoglalása:
Kísérlet jelleggel, sikerült feltárni a jövőben megvalósítandó feladatokat. Barbár mégis néhol frappáns gondolatok árán született meg a jelenlegi eremdény.
Fontos és prioritást érdemlő feladatunk, hogy az oldal reszponzív legyen és minden felhasználó kedvére használhassa és élvezhesse ki, a cégünk által nyújtott lehetőségeket.


## 1.3 Teszt jegyzőkönyv azonosító: 03 Adatbázis és annak kapcsolatai a weboldallal

### 1.3.1 Összefoglalás:

A weboldal működéséhez szükséges adatbázist készítettem el, illetve az azt a weboldallal összekötő UserDAO osztályt, illetve a User osztályt, amely a User objektumok modellje. Az adatbázist felállító SQL script megtekinthető az app/resources/sql/db_setup.sql fájlban.

A User osztályt egyszerű data osztálynak terveztem, getter/setter függvényekkel, illetve egy builder patternt megvalósító metódus-csoporttal.

A UserDAO felelős az adatbázissal való kommunikációért, amennyibel egy User objektumot kell lekérni, vagy tárolni.

### 1.3.2 Általános értékelés:

Időben végeztem a feladatom elkészítésével. Az adatbázis megfelelően működik, illetve az azt a weboldallal összekötő osztályok is.

### 1.3.3 Eredmények összegzése:

Adatbázis működik, minden jelenleg szükséges funkció elérhető.
Az adatbázist a weboldallal összekötő UserDAO osztály is működik.

### 1.3.4 Előrehaladás:

Mivel a weboldal vázához készített adatbázis megalkotásával jobban rálátok, hogyan kell majd a közeljövőben tervezett funkcionalitásokat kielégítő adatbázist létrehoznom.

### 1.3.5 A tevékenységek összefoglalása:

Az elkészült adatbázis szolgál a felhasználói adatok perzisztens tárolásáért, illetve a User és a UserDAO osztályok felhasználásával lehetséges az oldalra való regisztrálás, illetve a bejelentkezés.

## 1.4 Teszt jegyzőkönyv azonosító: 04 MVC pattern kivitelezése a Bejelentkezés és Regisztráció funkciókon.

### 1.4.1 Összefoglalás: 

A projekt mappastruktúrájában szépen elkülönül az MVC (model-view-controller) hierarchia. A app/view mappában belül helyezkednek el azok a view oldalak, amelyek majd megjelenítésre kerülnek. Ezek mind php fileok így html és php backend oldali scriptek is elhelyezhetőek bennük. Így például egy form validációt is egyszerűen készre tudunk tervezni.

Az app/controller mappába kaptak helyet a controller osztályok. Névkonvenciók alapján nagybetűvel kezdődik és benne kell szerepeljen, hogy Controller a filenévbe. pl.: HomeController.
A controllerek vázát a Controller.php ősosztály szolgáltatja. Ebben egy view() metódus található, amely output buffer segítségével a view mappában keresve meghívja a paraméterként megkapott view-t. Lényegében megjelenítésért felelős.
Az hogy épp melyik Controller hívódik meg az a routing/dispatcher.php dönti el. Ebben található egy dispatch() és egy loadController metódus. A dispatch() függvény a loadController által szolgáltatott controller objektum alapján meghívja a controller megfelelő actionjét, illetve átadja a paramétereket az actionnek. 
A routing/router.php-ban találhatóak mindazon URI string illesztések, amelyek meghívják a controllerek megfelelő actionjét.
Végül az app/model mappában találhatóak meg a modell osztályok. Ezeket is konvenció alapján nagy kezdőbetű és Controller címszó illet. pl.: LoginModel. Ezekben a php fileokban fogunk hivatkozni a különböző DAO fileokra, amelyek kezelik az adatbázis műveleteket. Ide írjuk továbbá az üzleti logikát, amely a funkcionalitások egészét adja. pl.: A RegistrationModel-ben található meg a registration($inputs) metódus, amely elvégzi a validáció pl.: hogy nem-e üres a get, post metódus által megkapott mező értékek. Ha minden stimmel akkor a UserDao alapján beinsertálja az adatbázisba a felhasználó adatait majd átirányítást végez. Ellenkező esetben, ha a validáció megbukik akkor a hibát munkamenetben eltároljuk, amely visszairányítva a regisztrációs oldalra megjelenítjük azokat.

## 1.4.2 Általános értékelés:

A mappastrukúra és az MVC architektúra kidolgozása egyszerű, de támogatja azon alap tulajdonságokat, amelyeket pl.: egy nagyobb php framework (Laravel, CodeIgniter) is nyújt. A munkát nagyban segíti ezen felépítés megléte.

## 1.4.3 Eredmények összegzése:

A routing megfelelően működik, viszont főbb funkciók továbbfejlesztésre szorulnak. pl.: opcionális paraméter lista. GET-es URI erőforrás azonosítók, paraméter stringek  dinamikus illesztése. A view, controller, model rendeltetésszerűen használható.

## 1.4.4 Előrehaladás:

A nagyprojektre a routing kibővítése és egy Model váz kialakítása nagyban megkönnyíti majd a jövőbeli munkákat.

## 1.4.5 A tevékenységek összefoglalása:

Az MVC pattern megírása, tanulmányozása során mélyebb betekintést nyertem, hogy hogyan is működhet egy nagyobb framework, amely az MVC-re építenek. Véleményem szerint a csapattársaimnak is hasznára vált ez a mappahierarchia, mely sokkal struktúráltabb és átláthatóbb projektet/kódot eredményezett. 
