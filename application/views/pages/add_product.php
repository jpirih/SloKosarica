<?php
/**
 * Created by PhpStorm.
 * User: Janko
 * Date: 29.5.2016
 * Time: 8:10
 */
?>

<!--  obrazec za vnos podatkov o izdelku  -->

<div class="row">
    <div class="col-sm-6">
        <?php echo form_open('products/addProduct', array('id' => 'add_product', 'class' => 'form-horizontal'));?>
        <div class="form-group">
            <label for="name" class="control-label col-sm-4"> Naziv Izdelka</label>
            <div class="col-sm-8">
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
        </div>

        <div class="form-group">
            <label for="description" class="control-label col-sm-4"> Opis Izdelka</label>
            <div class="col-sm-8">
                <textarea name="description" id="description" class="form-control" required cols="30" rows="10">

                </textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="production_date" class="control-label col-sm-4"> Datum izdelave </label>
            <div class="col-sm-8">
                <input type="datetime-local" name="production_date" id="production_date" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="expiry_date" class="control-label col-sm-4"> Porabiti do</label>
            <div class="col-sm-8">
                <input type="datetime-local" name="expiry_date" id="expiry_date" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="price" class="control-label col-sm-4"> Cena </label>
            <div class="col-sm-8">
                <input type="text" name="price" id="price" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="currency" class="control-label col-sm-4"> Valuta (3 znaki)</label>
            <div class="col-sm-8">
                <input type="text" name="currency" id="currency" class="form-control" required maxlength="3">
            </div>
        </div>
        <div class="form-group">
            <label for="ean_code" class="control-label col-sm-4"> EAN Koda</label>
            <div class="col-sm-8">
                <input type="text" name="ean_code" id="name" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="weight" class="control-label col-sm-4"> Teža</label>
            <div class="col-sm-8">
                <input type="text" name="weight" id="weight" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="weight_unit" class="control-label col-sm-4"> Merska enota</label>
            <div class="col-sm-8">
                <input type="text" name="weight_unit" id="weight_unit" class="form-control" placeholder="gram, kg, tona" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-8 col-sm-offset-4">
                <button type="submit" id="submint" class="btn btn-success ">
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
            V obrazec na laevi strani vnesi pdoatke o novem izdelku
            Datum lahko izbereš s koledarčka. Pri vnosu cene in teže  pazi
            obvezna je decimalna .(pika) ne ,(vejica).
        </p>
        <p class="krepko">
            Obvezno morajo biti izpolnjena vsa polja v obrazcu.
        </p>
        <p>
            <a href="<?= base_url();?>" class="btn btn-danger">
                <span class="glyphicon glyphicon-menu-left"></span>
                Nazaj na seznam
            </a>
        </p>
    </div>
</div>

<!-- jquery Ajax call  -->

<script type="text/javascript">
    $(document).ready(function () {
        $(".submit").click(function (event) {
            event.preventDefault();
            var name = $('#name').val();
            var description = $('#description').val();
            var production_date = $('#production_date').val();
            var expiry_date = $('#expiry_date').val();
            var price = $('#price').val();
            var currency = $('#currency').val();
            var ean_code = $('#ean_code').val();
            var weight = $('#weight').val();
            var weight_unit = $('#weight_unit').val();
            var submit = $('#submint').val();

            jQuery.ajax({
               type: 'POST',
                url: '<?= base_url('products/new/add');?>',
                dataType: 'json',
                data: {
                    name:name, description:description, production_date:production_date,
                    expiry_date:expiry_date, price:price, currency:currency, ean_code:ean_code,
                    weight:weight, weight_unit:weight_unit
                },
                success: function (res) {
                    if(res == true)
                    {
                        alert("OK");
                    }
                }
            });
        });
    });
</script>
