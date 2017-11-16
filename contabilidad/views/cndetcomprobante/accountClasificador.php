<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="cndetcomprobante-clasificador">
    <div class="form-group">
        <label for="iddescripcion">Ingrese parrafo:</label>
        <input type="text" class="form-control" id="iddescripcion">
    </div>

    <div class="form-group">
        <label for="resultado">Cuenta a usar:</label>
        <input type="text" class="form-control" id="resultado">
    </div>

    <div id="divTable"></div>
        <table id="idtabla"style="width:40%">
        </table>
    <br>
    <div class="form-group">
    <button type="button" class="btn btn-warning" onclick="getClasificador()">
    Buscar cuenta contable</button>
</div>
