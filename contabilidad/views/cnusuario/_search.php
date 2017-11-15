<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CnusuarioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cnusuario-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pkusuario') ?>

    <?= $form->field($model, 'fkgrupo') ?>

    <?= $form->field($model, 'nickname') ?>

    <?= $form->field($model, 'nombrecompleto') ?>

    <?= $form->field($model, 'apellidocompleto') ?>

    <?php // echo $form->field($model, 'password') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'authkey') ?>

    <?php // echo $form->field($model, 'accesstoken') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
