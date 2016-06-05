<?php
/**
 * Created by PhpStorm.
 * User: Janko
 * Date: 29.5.2016
 * Time: 11:25
 */
?>

<div class="row">
    <div class="col-sm-6">
        {product}
        <?php echo form_open('products/updateProduct/{id}', array('id' => 'edit_product', 'class' => 'form-horizontal'));?>
        <div class="form-group">
            <label for="name" class="control-label col-sm-4"> Naziv Izdelka</label>
            <div class="col-sm-8">
                <input type="text" name="name" id="name" value="{name}" class="form-control" required>
            </div>
        </div>

        <div class="form-group">
            <label for="description" class="control-label col-sm-4"> Opis Izdelka</label>
            <div class="col-sm-8">
                <textarea name="description" id="description" class="form-control" required cols="30" rows="10">
                    {description}
                </textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="production_date" class="control-label col-sm-4"> Datum izdelave </label>
            <div class="col-sm-8">
                <input type="date" name="production_date" value="{production_date}" id="production_date" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="expiry_date" class="control-label col-sm-4"> Porabiti do</label>
            <div class="col-sm-8">
                <input type="date" name="expiry_date" id="expiry_date" value="{expiry_date}" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="price" class="control-label col-sm-4"> Cena </label>
            <div class="col-sm-8">
                <input type="text" name="price" id="price" value="{price}" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="currency" class="control-label col-sm-4"> Valuta (3 znaki)</label>
            <div class="col-sm-8">
                <input type="text" name="currency" id="currency" value="{currency}" class="form-control" required maxlength="3">
            </div>
        </div>
        <div class="form-group">
            <label for="ean_code" class="control-label col-sm-4"> EAN Koda</label>
            <div class="col-sm-8">
                <input type="text" name="ean_code" id="ean_code" value="{ean_code}" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="weight" class="control-label col-sm-4"> Teža</label>
            <div class="col-sm-8">
                <input type="text" name="weight" id="weight" value="{weight}" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="weight_unit" class="control-label col-sm-4"> Merska enota</label>
            <div class="col-sm-8">
                <input type="text" name="weight_unit" id="weight_unit" value="{weight_unit}" class="form-control"  required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-8 col-sm-offset-4">
                <button type="submit" class="btn btn-success ">
                    <span class="glyphicon glyphicon-save"></span>
                    Shrani  podatke
                </button>
            </div>
        </div>

        <?php echo form_close()?>

    </div>
    <div class="col-sm-6 bg-info">
        <h2>Navodila</h2>
        <p>
            V obrazcu na laevi strani so izpisani trenutni podatki o izbranem izdelku,
            če jih želiš spremeniti preprosto preppiši  trenutno vrednost v polju in
            shrani sprremembe.
        </p>
        <p class="krepko">
            Obvezno morajo biti izpolnjena vsa polja v obrazcu.
        </p>
        <p>
            <a href="<?= base_url('products/{id}')?>" class="btn btn-danger">
                <span class="glyphicon glyphicon-menu-left"></span>
                Nazaj na podrobnosti
            </a>
        </p>
        {/product}
    </div>
</div>
