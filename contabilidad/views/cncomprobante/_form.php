<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use kartik\widgets\DatePicker;
use app\models\Cnmoneda;
use app\models\Cnbanco;
?>

<div class="cncomprobante-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cncodcomp')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'cntcomp')->dropDownList(
                [   '1' => 'INGRESO', 
                    '2' => 'EGRESO', 
                    '3' => 'TRASPASO',
                ], ['prompt' => 'Seleccione Tipo de comprobante']) ?>

    <?= $form->field($model, 'cnnrocomp')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'cnfechacomp')->widget(DatePicker::classname(), 
                [
                    'removeButton' => false,
                    'options' => ['placeholder' => 'Fecha de comprobante'],                    
                    'pluginOptions' => [
                        'autoclose'=>true,
                        'format' => 'dd/mm/yyyy'
                        ]
                ]); 
    ?>
    

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

    <?= $form->field($model, 'cntcambio')
                    ->textInput(['type' => 'number', "value"=>"6.96"]) ?>
    
    <?= $form->field($model, 'fkbanco')->widget(
            Select2::className(),
            [
                'data'      => ArrayHelper::map(Cnbanco::find()->all(), 'pk_banco', 'cnnombre'),
                'language'  => 'es',
                'options'   => [
                        'placeholder'   => 'Seleccione banco',
                    ],
                'pluginOptions'    => [
                        'allowClear'    => true,
                    ],
            ]
        );
    ?>
    <?= $form->field($model, 'cncliente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cnglosa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cnestado')->hiddenInput()->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
