<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use app\models\Cnmoneda;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\Cnplancontable */
/* @var $form yii\widgets\ActiveForm */
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
    

    <?= $form->field($model, 'cnnivel')->textInput() ?>

    <?= $form->field($model, 'cnctachica')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cnctacte')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cnctaflujo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cnctapresu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cnestado')->hiddenInput()->label(false) ?>
	
	

    <?= $form->field($model, 'cncuentapadre')->textInput() ?>

	
	
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
