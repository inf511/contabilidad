<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="cnplancontable-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pk_plancontable') ?>

    <?= $form->field($model, 'cncuentacontable') ?>

    <?= $form->field($model, 'cndescripcion') ?>

    <?= $form->field($model, 'fkmoneda') ?>

    <?= $form->field($model, 'cnnivel') ?>

    <?php // echo $form->field($model, 'cnctachica') ?>

    <?php // echo $form->field($model, 'cnctacte') ?>

    <?php // echo $form->field($model, 'cnctaflujo') ?>

    <?php // echo $form->field($model, 'cnctapresu') ?>

    <?php // echo $form->field($model, 'cnestado') ?>

    <?php // echo $form->field($model, 'cncuentapadre') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
