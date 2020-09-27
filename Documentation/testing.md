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
