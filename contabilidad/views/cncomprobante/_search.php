<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CncomprobanteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cncomprobante-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pk_comprobante') ?>

    <?= $form->field($model, 'cncodcomp') ?>

    <?= $form->field($model, 'cntcomp') ?>

    <?= $form->field($model, 'cnnrocomp') ?>

    <?= $form->field($model, 'cnfechacomp') ?>

    <?php // echo $form->field($model, 'fkmoneda') ?>

    <?php // echo $form->field($model, 'cntcambio') ?>

    <?php // echo $form->field($model, 'fkbanco') ?>

    <?php // echo $form->field($model, 'cncliente') ?>

    <?php // echo $form->field($model, 'cnglosa') ?>

    <?php // echo $form->field($model, 'cnestado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
