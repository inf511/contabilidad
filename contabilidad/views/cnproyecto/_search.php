<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CnProyectoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cn-proyecto-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pk_proyecto') ?>

    <?= $form->field($model, 'cnnombre') ?>

    <?= $form->field($model, 'cncodigo') ?>

    <?= $form->field($model, 'cnclave') ?>

    <?= $form->field($model, 'cnglosa') ?>

    <?php // echo $form->field($model, 'cnbreve') ?>

    <?php // echo $form->field($model, 'fkctacosto') ?>

    <?php // echo $form->field($model, 'cnestado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
