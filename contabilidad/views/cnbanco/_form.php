<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cnbanco */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cnbanco-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cncodigo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cnnombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cndireccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cnobservacion')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
