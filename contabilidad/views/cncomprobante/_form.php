<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cncomprobante */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cncomprobante-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cncodcomp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cntcomp')->textInput() ?>

    <?= $form->field($model, 'cnnrocomp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cnfechacomp')->textInput() ?>

    <?= $form->field($model, 'fkmoneda')->textInput() ?>

    <?= $form->field($model, 'cntcambio')->textInput() ?>

    <?= $form->field($model, 'fkbanco')->textInput() ?>

    <?= $form->field($model, 'cncliente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cnglosa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cnestado')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
