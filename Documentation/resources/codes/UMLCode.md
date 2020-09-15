@startuml

left to right direction

:Latogato: as lat

:Alkalmazott: as alk #Blue

:C�gvezet�: as vez #Black

package Kezd�Oldal #Yellow

{
usecase (Regisztr�ci�) as reg

usecase (Bel�p�s) as bel

usecase (Kapcsolat) as kap

usecase (Szolg�ltat�sok) as szolg

usecase (R�lunk)as rol

usecase (Bolt) as bol

usecase (Gal�ria) as gal

}

vez -[#black,dotted]-> bel

note "C�gvezet�nek" as csak2 #Orange

csak2 -[#black,dotted]-> (B�rsz�m�t�s)

csak2 -[#black,dotted]-> (Alkalmazottak Nyilv�ntart�sa)

csak2 -[#black,dotted]-> (M�szakok kezel�se)


note right of vez : Immortal/Godmode\n Mindenhez is hozz�f�r


note "N�v,C�m,Jelsz�,\n E-mail, Telefonsz�m" as adat #Orange

reg -- adat

adat --> (El�fizet)

reg -- adat

adat --> (Nem fizet el�)

note "Bankk�rtya megad�sa" as megad #Orange

(El�fizet) -- megad

megad --> (Ingyenes havi szolg�ltat�s)

note right of (Ingyenes havi szolg�ltat�s) : Egy szolg�ltat�s ingyenes ig�nybev�tele,\n havi szinten.

(Nem fizet el�) --> (Semmi extra jutalom)

lat --> reg

lat --> gal

lat --> kap

lat --> bel

lat --> szolg

lat --> bol

lat --> rol

alk -[#Blue,dashed]-> bel

(Edz�sterv kalkul�tor) as kalk

note "E-mail,Jelszo" as adat2 #Orange

bel -- adat2

adat2 -->(Id�pont foglal�s)

bel -- adat2

adat2 --> (Forum ig�nybev�tele)

adat2 --> kalk

adat2 --> (Profil)


note "Adatok m�dos�t�sa +" as mod #Orange

(Profil) -- mod

mod --> (Bankk�rtya megad�sa)

szolg --> (�sszes szolg�ltatl�s k�l�n pontban)

kap --> (El�rhet�s�g)


note "Alkalmazottaknak" as csak #Orange

bel -[#Blue,dashed]- adat2

adat2 -[#Blue,dashed]- csak

csak -[#Blue,dashed]-> (Munkabeoszt�s)

csak -[#Blue,dashed]-> (Havi b�r)

csak -[#Blue,dashed]-> (Szem�lyre Szabott Edz�sterv)

csak -[#Blue,dashed]-> (Felt�lt�s/T�rl�s/M�dos�t�s)

csak -[#Blue,dashed]-> (Profil)

(Profil) -[#Blue,dashed]- mod

bel -[#black,dotted]- adat2

adat2 -[#black,dotted]- csak2

note right of gal : Komplexum, Komplexum k�rny�ke,\n Szolg�ltat�sok helysz�ne, \n �lt�z�k, Zuhanyz�k, �letk�p

note right of (Felt�lt�s/T�rl�s/M�dos�t�s) : Term�kek , H�rek , Inform�ci�k \n l�trehoz�sa,felt�lt�se,m�dos�t�sa,t�rl�se

note right of (Szem�lyre Szabott Edz�sterv) : Saj�t mag�nak be tud �ll�tani mindent


note "S�ly, Magass�g,Testzs�rsz�zal�k,\n �letkor, Nem" as adat3

kalk -- adat3

adat3 --> (Kalkul�l�s)

note right of bol: Term�kek/Szolg�ltat�sok �rakkal

note right of rol : C�gt�rt�net bemutat�sa,\n t�m�r inform�ci�k

note right of szolg: R�szletes inform�ci� szolg�ltat�sainkr�l

note right of (El�rhet�s�g) : T�rk�p, Telefon, C�m, E-mail

@enduml