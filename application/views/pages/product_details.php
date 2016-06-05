<?php
/**
 * Created by PhpStorm.
 * User: Janko
 * Date: 29.5.2016
 * Time: 10:29
 */
?>

<div class="row ">
    <div class="col-sm-8 col-sm-offset-2 well">
        {product}
            <h3>{name}</h3>
            <hr>
            <h4>Podrobnosti</h4>
            <div class="col-sm-6">
                <span class="krepko">Porabiti do:</span> {expiry_date} <br>
                <span class="krepko">Datum izdlave:</span> {production_date} <br>
                <span class="krepko">Teža:</span> {weight} {weight_unit} <br>
                <span class="krepko">EAN koda:</span> {ean_code}
                <hr>
                <h4>Cena: {price} {currency}</h4>
            </div>
            <div class="col-sm-6 bg-info">
                <h4>Opis</h4>
                {description}
            </div>

    </div>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <hr>
            <a href="<?= base_url('products/edit');?>/{id}" class="btn btn-info">
                <span class="glyphicon glyphicon-edit"></span>
                Uredi
            </a>
            <a href="<?= base_url()?>" class="btn btn-danger">
                <span class="glyphicon glyphicon-menu-left"></span>
                Nazaj na sezanam
            </a>
        </div>
    </div>
    {/product}
</div>



