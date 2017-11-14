<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CnProyecto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cn-proyecto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cnnombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cncodigo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cnclave')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cnglosa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cnbreve')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fkctacosto')->textInput() ?>

    <?= $form->field($model, 'cnestado')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
