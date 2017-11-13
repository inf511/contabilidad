<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cnplancontable */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cnplancontable-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cncuentacontable')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cndescripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fkmoneda')->textInput() ?>

    <?= $form->field($model, 'cnnivel')->textInput() ?>

    <?= $form->field($model, 'cnctachica')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cnctacte')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cnctaflujo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cnctapresu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cnestado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cncuentapadre')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
