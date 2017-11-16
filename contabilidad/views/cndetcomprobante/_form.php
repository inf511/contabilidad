<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cndetcomprobante */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cndetcomprobante-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fkcomprobante')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'codigoCuentaContable')->textInput() ?>    

    <?= $form->field($model, 'fkcuentacontable')->hiddenInput()->label(false) ?>
    
    <?= $form->field($model, 'tipoDebeHaber')->dropDownList(
                [   '1' => 'DEBE', 
                    '2' => 'HABER'                
                ]) ?>

    <?= $form->field($model, 'cndebe')->textInput() ?>

    <?= $form->field($model, 'cnhaber')->textInput() ?>

    <?= $form->field($model, 'fkctacte')->hiddenInput(["value"=>"1"])->label(false) ?>

    <?= $form->field($model, 'fkproyecto')->hiddenInput(["value"=>"1"])->label(false) ?>

    <?= $form->field($model, 'fkdocument')->hiddenInput(["value"=>"1"])->label(false) ?>

    <?= $form->field($model, 'cnnrodoc')->hiddenInput(['value' => "000"])->label(false) ?>

    <?= $form->field($model, 'cnglosadet')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
