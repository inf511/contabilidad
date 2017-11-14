<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\cnmoneda */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cnmoneda-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cnsimbolo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cndescripcion')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
