<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CnchequeraSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cnchequera-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pk_chequera') ?>

    <?= $form->field($model, 'fkbanco') ?>

    <?= $form->field($model, 'fkcuentacontable') ?>

    <?= $form->field($model, 'cndescripcion') ?>

    <?= $form->field($model, 'cnnroinicio') ?>

    <?php // echo $form->field($model, 'cnnrofin') ?>

    <?php // echo $form->field($model, 'cnhabilitar') ?>

    <?php // echo $form->field($model, 'cnestado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
