@startuml

left to right direction

:Latogato: as lat

:Alkalmazott: as alk #Blue

:Cégvezetõ: as vez #Black

package KezdõOldal #Yellow

{
usecase (Regisztráció) as reg

usecase (Belépés) as bel

usecase (Kapcsolat) as kap

usecase (Szolgáltatások) as szolg

usecase (Rólunk)as rol

usecase (Bolt) as bol

usecase (Galéria) as gal

}

vez -[#black,dotted]-> bel

note "Cégvezetõnek" as csak2 #Orange

csak2 -[#black,dotted]-> (Bérszámítás)

csak2 -[#black,dotted]-> (Alkalmazottak Nyilvántartása)

csak2 -[#black,dotted]-> (Mûszakok kezelése)


note right of vez : Immortal/Godmode\n Mindenhez is hozzáfér


note "Név,Cím,Jelszó,\n E-mail, Telefonszám" as adat #Orange

reg -- adat

adat --> (Elõfizet)

reg -- adat

adat --> (Nem fizet elõ)

note "Bankkártya megadása" as megad #Orange

(Elõfizet) -- megad

megad --> (Ingyenes havi szolgáltatás)

note right of (Ingyenes havi szolgáltatás) : Egy szolgáltatás ingyenes igénybevétele,\n havi szinten.

(Nem fizet elõ) --> (Semmi extra jutalom)

lat --> reg

lat --> gal

lat --> kap

lat --> bel

lat --> szolg

lat --> bol

lat --> rol

alk -[#Blue,dashed]-> bel

(Edzésterv kalkulátor) as kalk

note "E-mail,Jelszo" as adat2 #Orange

bel -- adat2

adat2 -->(Idõpont foglalás)

bel -- adat2

adat2 --> (Forum igénybevétele)

adat2 --> kalk

adat2 --> (Profil)


note "Adatok módosítása +" as mod #Orange

(Profil) -- mod

mod --> (Bankkártya megadása)

szolg --> (Összes szolgáltatlás külön pontban)

kap --> (Elérhetõség)


note "Alkalmazottaknak" as csak #Orange

bel -[#Blue,dashed]- adat2

adat2 -[#Blue,dashed]- csak

csak -[#Blue,dashed]-> (Munkabeosztás)

csak -[#Blue,dashed]-> (Havi bér)

csak -[#Blue,dashed]-> (Személyre Szabott Edzésterv)

csak -[#Blue,dashed]-> (Feltöltés/Törlés/Módosítás)

csak -[#Blue,dashed]-> (Profil)

(Profil) -[#Blue,dashed]- mod

bel -[#black,dotted]- adat2

adat2 -[#black,dotted]- csak2

note right of gal : Komplexum, Komplexum környéke,\n Szolgáltatások helyszíne, \n Öltözõk, Zuhanyzók, Életkép

note right of (Feltöltés/Törlés/Módosítás) : Termékek , Hírek , Információk \n létrehozása,feltöltése,módosítása,törlése

note right of (Személyre Szabott Edzésterv) : Saját magának be tud állítani mindent


note "Súly, Magasság,Testzsírszázalék,\n Életkor, Nem" as adat3

kalk -- adat3

adat3 --> (Kalkulálás)

note right of bol: Termékek/Szolgáltatások árakkal

note right of rol : Cégtörténet bemutatása,\n tömör információk

note right of szolg: Részletes információ szolgáltatásainkról

note right of (Elérhetõség) : Térkép, Telefon, Cím, E-mail

@enduml