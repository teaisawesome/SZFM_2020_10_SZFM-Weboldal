# FunkcionálisSpecfikáció

## 1. Rendszer céljai és nem céljai

### A rendszer céljai:

**Usereknek:**  
&nbsp;&nbsp;&nbsp;&nbsp;Egy olyan weboldal biztosítása, amely naprakész információkat közöl a felhasználókkal, ha azok szeretnének érdeklődni a komplexum szolgáltatásai iránt. Lehetőség van regisztrálni a weboldalra így a regisztrált felhasználó többféle weboldal funkciót is elérhet. Használhatja a fórumot, időpontot foglalhat egyes szolgáltatásokra pár kattintással és egyéni edzésterv kalkulátorunkkal személyre szabott edzést is létrehozhat.  
&nbsp;&nbsp;&nbsp;&nbsp;A galéria a komplexumról és annak környékéről, szolgáltatásokról, öltözőről, zuhanyzókról fog képet tartalmazni. Ezt a galéria menüpont alatt lesz elérhető.  
&nbsp;&nbsp;&nbsp;&nbsp;A weboldalon elérhető lesz egy online webshop, ahol a komplexum egyéni termékeit lehet megrendelni. 
Kapcsolat menüpont alatt pedig az elérhetőségek fognak helyet kapni, illetve egy google maps térkép, amely segít könnyebben megtalálni a komplexumot.  
**Dolgozóknak:**  
&nbsp;&nbsp;&nbsp;&nbsp;A dolgozók kitüntetett felhasználókként jelennek meg a rendszerben. Nekik hozzáférésük van a weboldal managelését elősegítő oldalhoz is. Ezen az oldalon szerkeszteni tudják az egyes szolgáltatások képeit, információit, elérhetőségeket stb.
Személyre szabott edzésterveket is lehetőségük van létrehozni/megosztani a vendégekkel.
A saját profil adatoknál a saját beosztásukat/munkarendet is megtekinthetik.  
**Főnöknek:**  
&nbsp;&nbsp;&nbsp;&nbsp;Minden olyan funkcióval rendelkezik, mint egy dolgozó, vendég. Ezen kívül hozzáfér a saját bérkalkuláció hoz, alkalmazott nyilvántartáshoz.  

### A rendszernek nem célja:  

- Szolgáltatásokért lehetőség legyen online fizetni és jegyet váltani.
- A beszerzési rendszerrel való integráció.
- Biztonsági rendszerrel való integráció.
- Hírlevél létrehozása és küldése.
- Állatok jólétét elősegítő rendszerek integrációja. Beleértve az automata etetők, szűrőrendszer és vízhőmérséklet/koncentráció mérés.

## 4. Megfeleltetés, hogyan fedik le a használati esetek a követelményeket.

### Követelményspecifikáció 5.1.1: 

- Online regisztrációs felület &check;
    - Felhasználó/jelszó alapú belépés &check;

### Követelményspecifikáció 5.1.2:

- Online/Lokális személyzet nyilvántartása &check;
    - Felhasználó/jelszó alapú belépés &check;
    - Műszak/ledolgozott órák számának megtekintése/jelenleg megkeresett fizetés &check;

### Követelményspecifikáció 5.1.3:

- Online felületért felelős céges dolgozók legyenek képesek új termék feltöltésére/személyes edzés|táplálkozás feltöltésére/új információk feltöltése szolgáltatásainkkal kapcsolatban &check;

### Követelményspecifikáció 5.1.4:

- Időpontfoglalás a vendégek számára &check;
    - Lefoglalt időpontok megjelenítése/Tiltása, ha foglalt &check;
        - Időpontfoglalás &check;

### Követelményspecifikáció 5.1.5:

- Kapcsolat/Elérhetőség megjelenítése &check;
    - Cím/Telefonszám/E-mail/Bolt Telefonszám/Bolt e-mail/Google térkép &check;

### Követelményspecifikáció 5.1.6:

- Galéria &check;
    - Medencék, akváriumok, szolgáltatásaink helyszíne &check;

### Követelményspecifikáció 5.1.7:

- Menüsor &check;
- Keresés &cross;
    - A funkcionalitás a Bolt szekcióban lesz elérhető, külön nem.

### Követelményspecifikáció 5.1.8:

- Online Rendelés esetén a komplexum bankszámlaszáma a megfelelő menüpontban &check;

### Követelményspecifikáció 5.1.9:

- Fórum lehetősége ahol véleményezhetik a regisztrált felhasználóink szolgáltatásainkat &check;
    - Csak bejelentkezés után lehet igénybe venni

### Követelményspecifikáció 5.1.10:

- Reszponzív weboldal &check;

## 9. Forgatókönyvek

**Belépés:**

&nbsp;&nbsp;&nbsp;&nbsp;A felhasználó beírja a böngészőbe az URL címét a weboldalnak. Ezután betöltődik a weboldal index (home) oldala. Itt már szépen látszani fog az oldal menüpontjai között a belépés lehetőség. Erre a menüpontra kattintva átirányítás történik a belépés oldalra. Ezen az oldalon egy belépés form fogja várni a felhasználót. Az email és a jelszó mezők kitöltése kötelező érvényű. Ha begépelte az email-jelszó párost akkor két lehetőség történhet.  
- Belépés gombra kattintva hibaüzenetet kapunk. Ekkor az történt, hogy hibás authentikáció révén rossz belépési adatokat adunk meg.
- Belépés gombra kattintva nem kapunk hibaüzenetet, helyette ismét az index oldalra kapunk átirányítás. Megjelenik a menüsorban az account név és egyéb lehetőségek, amelyekhez a user hozzáférhet.

**Regisztráció:**

&nbsp;&nbsp;&nbsp;&nbsp;A felhasználó beírja a böngészőbe az URL címét a weboldalnak. Ezután betöltődik a weboldal index (home) oldala. Itt már szépen látszani fog az oldal menüpontjai között a regisztráció lehetőség. Erre a menüpontra kattintva átirányítás történik a regisztrációs oldalra. Ezen az oldalon egy regisztrációs form fogja várni a felhasználót. A regisztrációs adatmezők (név, lakcím, email, telefon, jelszó) kitöltése kötelező. Ha valamely mezőt üresen hagyjuk nem bírunk regisztrálni és az üresen hagyott mezőn megjelenik egy hibaüzenet. Ha minden mezőt kitöltöttek és rákattintunk a regisztráció gombra akkor két opció történhet:
- Hibaüzenetet kapunk. Egy felhasználó már használja azt az emailt, amelyet megadtunk. Ebben az esetben egy új email cím megadása kötelező!
- Sikeres regisztráció! Megjelenik egy sikeres regisztrációt jelző üzenet, illetve információt kapunk a belépés opcióról is. 

**Szolgáltatások:**

&nbsp;&nbsp;&nbsp;&nbsp;A szolgáltatások menüpontra kattintva átirányítás történik a szolgáltatások oldalra. Itt az összes szolgáltatás megtalálhatóak “card” listába szervezve. Ha a felhasználó rákattint az egyik card-ra, akkor legördül egy blokk az összes arra a szolgáltatásra vonatkozó információval.

**Profil:**

&nbsp;&nbsp;&nbsp;&nbsp;A felhasználó saját profil menüpontjára kattintva a profil oldalon találja magát. Itt lehetősége van megadni a saját profiljára vonatkozó további információkat pl.: bankszámlaszám. Illetve tudja szerkeszteni a már meglévő adatait is. *Esetleg még extra funkcióként profilképet is lehessen beállítani.

**Galéria:**

&nbsp;&nbsp;&nbsp;&nbsp;A galéria menüpontra kattintva a galéria oldalon találjuk magunkat. Itt különböző kis táblázatos elrendezésű cardokat találunk, amiken képek vannak. Ha ezekre a cardokra rákattintunk akkor nagyításba megjelenik a kattintott kép.

