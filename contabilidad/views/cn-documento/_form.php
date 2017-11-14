<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CnDocumento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cn-documento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cndescripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cndocnota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cndocbreve')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
