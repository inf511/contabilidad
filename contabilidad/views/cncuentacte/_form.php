<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cncuentacte */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cncuentacte-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cncodigo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cnnombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cndireccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cntelefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cntelefax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cnnit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cncontacto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cnestado')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
