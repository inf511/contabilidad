<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use app\models\Cnmoneda;
use yii\helpers\ArrayHelper;
?>

<div class="cnplancontable-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cncuentacontable')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cndescripcion')->textInput(['maxlength' => true]) ?>
	
	 <?= $form->field($model, 'fkmoneda')->widget(
            Select2::className(),
            [
                'data'      => ArrayHelper::map(Cnmoneda::find()->all(), 'pk_moneda', 'cndescripcion'),
                'language'  => 'es',
                'options'   => [
                        'placeholder'   => 'Seleccione tipo de moneda',
                    ],
                'pluginOptions'    => [
                        'allowClear'    => true,
                    ],
            ]
        );
    ?>

    <?= $form->field($model, 'cnnivel')->hiddenInput(['value' => 1])->label(false) ?>

    <div class="form-group">
        <div class="col-md-3">
            <?= $form->field($model, 'cnctachica')->checkbox() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'cnctacte')->checkbox() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'cnctaflujo')->checkbox() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'cnctapresu')->checkbox() ?>
        </div>        
    </div>

    <?= $form->field($model, 'cnestado')->hiddenInput(["value" => "T"])->label(false) ?>
	
    <?= $form->field($model, 'tag')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cncuentapadre')->textInput() ?>
	
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
