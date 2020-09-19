# Rendszerterv

## 3. Üzleti folyamatok modellje

&nbsp;&nbsp;&nbsp;&nbsp;A felhasználó a weboldalt megnyitva, egy átlagos, letisztult képet fog kapni, ahol alapinformációkat szolgáltatunk a helyiségekről, illetve a menüsort felhasználva további funkciókat érhet el, melyekkel további tudásra tesz szert. 
Menüsor jellemzése a látogató szemszögéből:

**-> Bolt :**

    -- A bolt fület megnyitva, komplexumunk belsejében található üzletünkről kapnak információt. Termékeinket tudják megtekinteni, melyeket üzletünk tartalmaz. ( Pólók, Bögrék, Teák, Gyógynövények, és egyéb készítmények, amelyek hozzájárulnak az egészségesebb életmód kialakításához) 
    -- Ezen felül szolgáltatásaink árlistáját tekinthetik meg, melyen átláthatóan el tudják olvasni minek a használata/igénybevétele mennyibe is kerül. 
**-> Galéria :**

    -- A látogató, aktuális képeket tekinthet meg építmünykről és környékéről, szolgáltatásaink helyszínéről, illetve öltözőinkről, zuhanyzóinkról. Emellett életképeket láthatnak, melyek szimbolikus jelleggel próbálják reprezentálni a hangulatot, amely átjárja az épületegyüttest.

**-> Regisztráció:** 

    -- Egyértelmű kérdéseket teszünk, melyekkel elkérjük a regisztrálni akaró fél:  
        - nevét 
        - címét 
        - jelszavát 
        - e-mail címét 
        - telefonszámát
    -- Ezeken felül lehetőséget kínálunk előfizetett regisztrációra, amelyet ha kiválaszt, egy plusz információt kell megadni: a bankszámlaszámot 
    -- Előfizetett felhasználóként, kap cégünktől egy ingyenes felhasználási lehetőséget, bármelyik szolgáltatásunkra.
**-> Kapcsolat:**

    Egyértelmű elérhetőséget biztosítunk, cégünkkel kapcsolatban beleértve a térképes megjelenítést is.(Címünk, Telefonszámunk, E-mail címünk)
**-> Szolgáltatások:**

    Kategorizálva érheti el a pontokon keresztül mit szeretne a vendég igénybe venni, és a döntés megkönnyítése érdekében részletes leírást  kap a szolgáltatás  pozitív egészségügyi hatásairól.
**-> Rólunk:**

    Cégünk történelmének bemutatása és tömör információk juttatásokról.
    Plusz érdekességképpen pedig négy alapító önéletrajzáról olvashatnak.
**-> Belépés:**

    -- Ez a menüpont teszi lehetővé, a regisztrált feleknek a belépést, miután extra szolgáltatásként a weboldalon a fórumot is igénybe tudja venni, ahol véleményét kinyilvánítva tud segítséget nyújtani a további érdeklődők számára.
    -- Extra funkcióként időpontot tud foglalni a különböző programokra, és saját edzéstervet tudunk összeállítani neki, az edzésterv kalkulátor segítségével.
    -- A kalkulátor érdeklődik a regisztrált fél súlya, magassága, testzsírszázaléka,életkora és neme felől.
    -- Saját profilukat is megtudják tekinteni a regisztrált felek, hogy az adatmódosítás lehetőségét felkínáljuk, illetve ha elő szeretne fizetni mégis, akkor ezt megtudja tenni.
    --  Ezen adatok alapján pedig tökéletesen kiszámolja és kiadja a megfelelő edzéstervet, melyekhez kellő felszerelést biztosít intézményünk.

&nbsp;&nbsp;&nbsp;&nbsp;Az alkalmazottak is megkapják ezeket a funkciókat, viszont van pár extra, amelyek az ott dolgozói léttel járnak.
Ezek a belépést követően lesznek elérhetőek saját azonosítóik alapján. 

Ami extra: 

**-> Belépés:**

    -- Az alkalmazott megtudja tekinteni az aktuális havi bérét, hogy az adott hónapban mennyit is keresett.
    Saját személyre szabott edzéstervet tud kialakítani a kalkulátor igénybevétele nélkül. 
    -- Kap egy fület, amelyen keresztül a boltba tudja feltölteni az újabb termékeinket vagy levenni amelyik már elfogyott.Továbbá szolgáltatásaink leírását tudja módosítani,frissíteni,törölni.
    -- Megtekintheti a saját munkaidő beosztását, hogy az adott hónapban mikor is dolgozik, melyik napokon.

&nbsp;&nbsp;&nbsp;&nbsp;A cégvezető is tudja természetesen kezelni a felületet. Ami a vezető privilégiuma közé tartozik, hogy kezelni tudja: 

    -- Bérszámítást, ahol alkalmazottainak tud árakat szabni,
    -- Nyilván tudja tartani a jelen dolgozóinak listáját,
    -- Műszakokat tudja kezelni, tehát az időbeosztást tudja kialakítani.

## 8. Architekturális terv

&nbsp;&nbsp;&nbsp;&nbsp;Maga a rendszer tervezési mintája a három rétegű alkalmazást testesíti meg:

- Frontend 
- Internet 
- Webszerver/Alkalmazás szerver 
- Backend

**Főbb komponensek:**

**Front End->**

- Web böngésző
- Tartalom/Megjelenítés/Viselkedés
- Mobil böngésző

**Internet**

**MiddleWare->**

- Web server
- Alkalmazás szerver

**Back End->**

- Adatbázis 
- Egyéb szerver

A rendszer felépítését illetően, egy kliens-szerver modellt veszünk alapul, ahol az adat és a feldolgozás megoszlásának eloszlása a fő profil, a feldolgozó egységek között. 

- Kliensek
- Szerverek
- Hálózat 

**Általánosan: ->**

**Kliensek halmaza:**

- Szerverek által biztosított szolgáltatásokat fogják futtatni.
- Számos példány futhat egyidejűleg

**Hálózat:**

- Kliens hozzáférését biztosítja a szolgáltatásokhoz

**Szerverek halmaza:**
- Alrendszerek , számítógépek számára nyújt szolgáltatást

**Biztonság:** 
- HTTP protokoll használata

A rendszer felbontását illetően a megvalósítás **objektumorientált felbontás** lesz:

- jól definiált interfészekkel rendelkező objektumok
- szolgáltatások más objektumok részére
- vezérlési modell használata 

**Változtathatóság:**
- egyszerű, mert az objektumok implementációja anélkül változtatható, hogy az hatással lenne más objektumokra.

**Vezérlési stílus:** 
- Eseményvezérelt rendszer


## 9. Adatbázis terv

### Az adatbázis UML modellje

![Adatbázis UML Diagram](https://raw.githubusercontent.com/teaisawesome/SZFM_2020_10_SZFM-Weboldal/master/Documentation/resources/images/DB_UML_Diagram.png "Adatbázis UML Diagram")

### Tárolt eljárások

Tárolt eljárásokat nem fogunk alkalmazni.

### Fizikai adatmodellt legeneráló SQL szkript

```sql
CREATE TABLE USERS(
    ID NUMBER NOT NULL AUTO_INCREMENT,
    UNAME VARCHAR(60) NOT NULL,
    USERNAME VARCHAR(40) NOT NULL,
    UADDRESS VARHCAR(80) NOT NULL,
    EMAIL VARCHAR(60) NOT NULL,
    PHONE_NUMBER NUMBER NOT NULL,
    RANK_ID NUMBER,
    PRIMARY KEY (ID),
    CONSTRAINT FK_RANK_ID FOREIGN KEY (RANK_ID)
    REFERENCES RANKS(ID)
);

CREATE TABLE RANKS(
    ID NUMBER NOT NULL AUTO_INCREMENT,
    RNAME VARCHAR(20),
    PRIMARY KEY (ID)
);

CREATE TABLE CARDS(
    ID NUMBER NOT NULL AUTO_INCREMENT,
    USER_ID NUMBER,
    CARD_NUMBER NUMBER NOT NULL,
    PRIMARY KEY (ID),
    CONSTRAINT FK_USER_ID FOREIGN KEY (USER_ID) REFERENCES USERS(ID)
);

CREATE TABLE WAGES(
    ID NUMBER NOT NULL AUTO_INCREMENT,
    USER_ID NUMBER,
    WAGE NUMBER,
    PRIMARY KEY (ID),
    CONSTRAINT FK_USER_ID FOREIGN KEY (USER_ID) REFERENCES USERS(ID)
);

CREATE TABLE FORUM(
    ID NUMBER NOT NULL AUTO_INCREMENT,
    USER_ID NUMBER,
    CONTENT VARCHAR(400),
    PRIMARY KEY (ID),
    CONSTRAINT FK_USER_ID FOREIGN KEY (USER_ID) REFERENCES USERS(ID)    
);
```
## 11. Tesztterv

&nbsp;&nbsp;&nbsp;&nbsp;A tesztterv célja a tesztelés teljes körűségének biztosítása, a tesztelés során alkalmazott eljárások és megoldások meghatározásával. 

**Tesztelő:**

- teszt végrehajtása 
- észrevételek dokumentálása
- teszt dokumentáció archiválása

**Szakértő:**
- észrevételek elemzése, megoldás javaslata

**Teszt-koordinátor:**

- teszt terv készítése
- tesztterv jóváhagyása
- teszt forgatókönyvek létrehozása
- inkonzisztenciák kezelése
- helyes és időbeli hibakezelés
- projekt elkaszálása szükség esetén
- végső riport készítése
- teszt dokumentáció archiválása
- észrevételek státuszának követése illetve dokumentáélása

**Projektvezető:**
- teszt terv jóváhagyása
- tesztterv forgatókönyve

**Tesztkörnyezet:** 
- környezet neve és feladata
- hozzáférés módja
- konfiguráció
- kapcsolattartó személy

**Tesztadatok:**

- végrehajtáshoz szükséges rekordok
- elkészítésért , feltöltésért felelősök

**Tesztadatok leszállítása:**
- teszt terv: ->
- tesztesetek: ->
- tesztjegyzőkönyvek: ->
- tesztelési jelentés: ->
    - felelős személy
    - szállítási gyakoriság
    - szállítás módja

**Tesztelési eszközök:** 
- automatizált eszközök
- tesztelői csapat alkalmazása
- teszt-optimalizáló módszerek 

Sikeres tesztről akkor beszélünk, ha a korábban említett egyveleg minden pontja rendben zajlott le és ennek fejében nincs kifogásolható eredmény, amely valahol is hibát dobott volna.

pl.: Regisztráció, Belépés, Adatbázis funkcionalitások, Biztonság stb...

## 12. Telepítési Terv
A **felhasználót** illetően : 
- számítógép
- operációs rendszer feltelepítése 
- internet elérés
- bármelyik web böngésző letöltése/telepítése
- megfelelő url begépelése

A **céget** illetően a megvalósítás:
- XAMPP webszerver-szoftvercsomag
- ATW -> ingyenes webtárhely (Platformfüggetlen környezet) - https://atw.hu/ingyenes-webtarhely

**XAMPP** röviden, miért is praktikus számunkra.

    -- Az XAMPP egy szabad és nyílt forrású platformfüggetlen webszerver-szoftvercsomag, amelynek legfőbb alkotóelemei az Apache webszerver, a MariaDB adatbázis-kezelő, valamint a PHP és a Perl programozási nyelvek értelmezői (végrehajtó rendszerei). 
    -- Ez a szoftvercsomag egy integrált rendszert alkot, amely webes alkalmazások készítését, tesztelését és futtatását célozza, és ehhez egy csomagban minden szükséges összetevőt tartalmaz. 
    -- Egységes, átlátható és praktikus a megvalósítás szempontjából, hisz mindent elérünk ami számunkra a megvalósításhoz kell. 
**ATW** röviden, miért is gondolkodjunk el rajta: 

    -- Ingyenes webtárhely szolgáltatás amely 2003  augusztusában látott napvilágot.A szolgáltatás azáltal vált hamar ismertté, hogy versenytársakhoz képest jelentősen nagyobb tárhelyet tud biztosítani a felhasználók számára.

## 13. Karbantartási Terv

&nbsp;&nbsp;&nbsp;&nbsp;Informatikai szempontból a biztonság mindig is fontos volt - lesz, hogy ne engedjük az illetéktelen behatolók számára, hogy feltörjék ügyfeleink adatait vagy az ott dolgozók adatait, még rosszabb esetben a vezérigazgató belépési adatait.

&nbsp;&nbsp;&nbsp;&nbsp;Folyamatos frissítés és az aktuális protokolloknak megfelelő eljárásokat biztosítunk. 

&nbsp;&nbsp;&nbsp;&nbsp;Rendszeres biztonsági mentés készítése, illetve tartalomkezelő rendszer és a hozzá tartozó moduloknak, mindig a legfrissebb verzióra való frissítése amit nyújtunk.

&nbsp;&nbsp;&nbsp;&nbsp;Rendszeres karbantartás mellett szól a weboldal helyezési kérdése a google-t illetően.Folyamatos tesztelések végett - teljesítésének vizsgálata és gyorsaságának vizsgálata.

&nbsp;&nbsp;&nbsp;&nbsp;Folyamatos foglalkoztatottságnak köszönhetően, a weboldal helyezésének rangsorolása is kedvezőbb lesz.
**Összegezve tehát :** 
- Fejlesztések, Hibák kijavítása
- Új elemek létrehozása
- Oldalak felvétele, kialakítása, törlése
- Tartalomkezelő frissítése
- Havi több biztonsági mentés
- Tárhellyel kapcsolatos ügyintézések
