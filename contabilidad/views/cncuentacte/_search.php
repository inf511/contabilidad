<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CncuentacteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cncuentacte-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pk_cuentacte') ?>

    <?= $form->field($model, 'cncodigo') ?>

    <?= $form->field($model, 'cnnombre') ?>

    <?= $form->field($model, 'cndireccion') ?>

    <?= $form->field($model, 'cntelefono') ?>

    <?php // echo $form->field($model, 'cntelefax') ?>

    <?php // echo $form->field($model, 'cnnit') ?>

    <?php // echo $form->field($model, 'cncontacto') ?>

    <?php // echo $form->field($model, 'cnestado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
