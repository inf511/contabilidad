<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cndetcomprobante */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cndetcomprobante-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fkcomprobante')->textInput() ?>

    <?= $form->field($model, 'fkcuentacontable')->textInput() ?>

    <?= $form->field($model, 'cndebe')->textInput() ?>

    <?= $form->field($model, 'cnhaber')->textInput() ?>

    <?= $form->field($model, 'fkctacte')->textInput() ?>

    <?= $form->field($model, 'fkproyecto')->textInput() ?>

    <?= $form->field($model, 'fkdocument')->textInput() ?>

    <?= $form->field($model, 'cnnrodoc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cnglosadet')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
