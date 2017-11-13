<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CnbancoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cnbanco-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pk_banco') ?>

    <?= $form->field($model, 'cncodigo') ?>

    <?= $form->field($model, 'cnnombre') ?>

    <?= $form->field($model, 'cndireccion') ?>

    <?= $form->field($model, 'cnobservacion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
