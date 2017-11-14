<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cnchequera */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cnchequera-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fkbanco')->textInput() ?>

    <?= $form->field($model, 'fkcuentacontable')->textInput() ?>

    <?= $form->field($model, 'cndescripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cnnroinicio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cnnrofin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cnhabilitar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cnestado')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
