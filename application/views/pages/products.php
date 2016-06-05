<?php
/**
 * Created by PhpStorm.
 * User: Janko
 * Date: 29.5.2016
 * Time: 7:37
 */
?>

<div class="row">
    <div class="col-sm-6 clo-sm-offset-3">
        <div class="btn-group">
            <a href="<?= base_url('products/new'); ?>" class="btn btn-success btn-lg">
                <span class="glyphicon glyphicon-plus"></span>
                Dodaj Izdelek
            </a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <table class="table table-responsive table-bordered table-striped">
            <thead>
                <tr class="glavaTabele">
                    <th>Izdelek</th>
                    <th>Datum proizvodnje</th>
                    <th> Porabiti do</th>
                    <th>Podrobnosti</th>
                    <th>Izbriši</th>
                </tr>
            </thead>
            <tbody>
            {products}
                <tr>
                    <td>{name}</td>
                    <td>{production_date}</td>
                    <td>{expiry_date}</td>
                    <td>
                        <a href="<?= base_url('products');?>/{id}" class="btn btn-info">
                            Podrobnosti
                        </a>
                    </td>
                    <td>
                        <a href="<?=base_url('products/delete');?>/{id}" class="btn btn-danger">
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>
                    </td>
                </tr>
            {/products}
            </tbody>
        </table>
    </div>
</div>
