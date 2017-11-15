<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CndetcomprobanteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cndetcomprobante-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pk_detcomprobante') ?>

    <?= $form->field($model, 'fkcomprobante') ?>

    <?= $form->field($model, 'fkcuentacontable') ?>

    <?= $form->field($model, 'cndebe') ?>

    <?= $form->field($model, 'cnhaber') ?>

    <?php // echo $form->field($model, 'fkctacte') ?>

    <?php // echo $form->field($model, 'fkproyecto') ?>

    <?php // echo $form->field($model, 'fkdocument') ?>

    <?php // echo $form->field($model, 'cnnrodoc') ?>

    <?php // echo $form->field($model, 'cnglosadet') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
