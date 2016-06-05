# Foodplus Products

## About 

FoodplusProducts je ena testna aplikacija, ki sem jo ustvaril ob uèenju CodeIgniter Framework-a.
Podatki v bazi so pobarni s speltnie strani [Tuš Cash and Carry](http://www.tuscc.si/) . 

Preden boste poganjali aplikacijo na svojem localhostu si nastavite parametnre znotraj application/config/config.php  base_url() 
glede na podatke, ki veljajo za vaš strežnik

Pravtako ustrezno nastavite nastavitve znotraj .htaccess datoteke tako, da bodo delovale na vašem localhost-u  

Prav tako si ustrezno nastavite podatke za povezavo z mysql bazo podatkov znotraj application/config/database.php, da bo
povezava z boazo podatkov pravilno delovala. 

**Opozorilo** zgoraj opisane nastavitve, ki so trenutno v application config namreè veljajo za moj localhost. 

## Strkuktura

1. Prva stran prikazuje seznam vseh shranjenih izdelkov
2. Za dodajanje novih izdelkov klikni na zeleni gumb Dodaj izdelek 
3. Vse podrobnosti o izdelku lahko pogledaš èe klikneš na gumb podrobnosti pri posameznem izdelku v tabeli.
4. Znotraj zavihka podrobnosti  je možnost urejanja podatkov s klikom na gumb Uredi se odpre obrazec, ki omogoèa spreminjanje podatkov
pa sem specificiral kar v appllication/config/autoload. 
5. Gumb z ikono koša za smeti izbirše posamezni izdelek iz baze. 

4 bazo  sem kreriral kar direktno z mysql sehll-om. 

**Testna baza je dostopna v mapi podatki** - vsi pdoatki v bazi so pobrani iz spletne strani trgovine [Tuš Cash and Carry](http://www.tuscc.si/)

## Opombe 
* Pri prikazovanju podatkov iz baze  mi na mojem localhostu  mi nagaja èrka È vsi ostali šumniki so OK. 
* Ajax sem uporabil na obrazcu za dodajanje novega izdelka, napisal sem po enem tutorialu, ki sem ga našel na spletu, èe ima kdo boljšo  idejo naj 
 mi jo prosim sporoèi
* Èe kdo ve boljši naèin za uporabo template-ov od tistega iz dokumentacije, ki sem ga uporabil naj mi prosim sporoèi. 
* Toèno To kar piše v tej datoteki piše tudi v zavihku About ko poženeš aplikacijo  

Lep Pozdrav 

Janko Pirih 

Podlanišèe, Maj 2016 