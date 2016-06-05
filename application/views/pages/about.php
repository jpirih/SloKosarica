<?php
/**
 * Created by PhpStorm.
 * User: Janko
 * Date: 29.5.2016
 * Time: 14:45
 */
?>

<div class="row">
    <div class="col-sm-offset-6 col-sm-offset-3">
        <div class="panel panel-default">
            <div class="panel-body">
                <h2>About</h2>
                <p>

                    FoodplusProducts je ena testna aplikacija, ki sem jo ustvaril ob učenju CodeIgniter Framework-a.
                    Podatki v bazi so pobarni s speltne strani <a href="http://www.tuscc.si">Tuš Cash and Carry</a> .
                </p>
                <p>
                    Preden boste poganjali aplikacijo na svojem localhostu si nastavite parametnre znotraj application/config/config.php  base_url()
                    glede na podatke, ki veljajo za vaš strežnik
                </p>
                <p>
                    Pravtako ustrezno nastavite nastavitve znotraj .htaccess datoteke tako, da bodo delovale na vašem localhost-u
                    Prav tako si ustrezno nastavite podatke za povezavo z mysql bazo podatkov znotraj application/config/database.php, da bo
                    povezava z boazo podatkov pravilno delovala.
                </p>
                <p>
                    <span class="krepko">Opozorilo</span>  zgoraj opisane nastavitve, ki so trenutno v application config namreč veljajo za moj localhost.
                </p>
                <h2>Struktura</h2>
                <ol>
                    <li>Prva stran prikazuje seznam vseh shranjenih izdelkov</li>
                    <li>Za dodajanje novih izdelkov klikni na zeleni gumb Dodaj izdelek</li>
                    <li>Vse podrobnosti o izdelku lahko pogledaš če klikneš na gumb podrobnosti pri posameznem izdelku v tabeli.</li>
                    <li>
                        Znotraj zavihka podrobnosti  je možnost urejanja podatkov s klikom na gumb Uredi se odpre obrazec, ki omogoča spreminjanje podatkov
                        pa sem specificiral kar v appllication/config/autoload.
                    </li>
                    <li>Gumb z ikono koša za smeti izbirše posamezni izdelek iz baze. </li>
                </ol>

                <span class="krepko">Testna baza je dostopna v mapi podatki </span>
                
                <h2>Opombe</h2>
                <ul>
                    <li>Pri prikazovanju podatkov iz baze  mi na mojem localhostu  mi nagaja črka Č vsi ostali šumniki so OK.</li>
                    <li>
                        Ajax sem uporabil na obrazcu za dodajanje novega izdelka, napisal sem po enem tutorialu, ki sem ga našel na spletu, če ima kdo boljšo  idejo naj
                        mi jo prosim sporoči
                    </li>
                    <li>
                        Če kdo ve boljši način za uporabo template-ov od tistega iz dokumentacije, ki sem ga uporabil naj mi prosim sporoči.
                    </li>
                    <li>
                        Točno To kar piše v tej datoteki piše tudi v zavihku About ko poženeš aplikacijo
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
