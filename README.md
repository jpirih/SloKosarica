# Foodplus Products

## About 

FoodplusProducts je ena testna aplikacija, ki sem jo ustvaril ob u�enju CodeIgniter Framework-a.
Podatki v bazi so pobarni s speltnie strani [Tu� Cash and Carry](http://www.tuscc.si/) . 

Preden boste poganjali aplikacijo na svojem localhostu si nastavite parametnre znotraj application/config/config.php  base_url() 
glede na podatke, ki veljajo za va� stre�nik

Pravtako ustrezno nastavite nastavitve znotraj .htaccess datoteke tako, da bodo delovale na va�em localhost-u  

Prav tako si ustrezno nastavite podatke za povezavo z mysql bazo podatkov znotraj application/config/database.php, da bo
povezava z boazo podatkov pravilno delovala. 

**Opozorilo** zgoraj opisane nastavitve, ki so trenutno v application config namre� veljajo za moj localhost. 

## Strkuktura

1. Prva stran prikazuje seznam vseh shranjenih izdelkov
2. Za dodajanje novih izdelkov klikni na zeleni gumb Dodaj izdelek 
3. Vse podrobnosti o izdelku lahko pogleda� �e klikne� na gumb podrobnosti pri posameznem izdelku v tabeli.
4. Znotraj zavihka podrobnosti  je mo�nost urejanja podatkov s klikom na gumb Uredi se odpre obrazec, ki omogo�a spreminjanje podatkov
pa sem specificiral kar v appllication/config/autoload. 
5. Gumb z ikono ko�a za smeti izbir�e posamezni izdelek iz baze. 

4 bazo  sem kreriral kar direktno z mysql sehll-om. 

**Testna baza je dostopna v mapi podatki** - vsi pdoatki v bazi so pobrani iz spletne strani trgovine [Tu� Cash and Carry](http://www.tuscc.si/)

## Opombe 
* Pri prikazovanju podatkov iz baze  mi na mojem localhostu  mi nagaja �rka � vsi ostali �umniki so OK. 
* Ajax sem uporabil na obrazcu za dodajanje novega izdelka, napisal sem po enem tutorialu, ki sem ga na�el na spletu, �e ima kdo bolj�o  idejo naj 
 mi jo prosim sporo�i
* �e kdo ve bolj�i na�in za uporabo template-ov od tistega iz dokumentacije, ki sem ga uporabil naj mi prosim sporo�i. 
* To�no To kar pi�e v tej datoteki pi�e tudi v zavihku About ko po�ene� aplikacijo  

Lep Pozdrav 

Janko Pirih 

Podlani��e, Maj 2016 