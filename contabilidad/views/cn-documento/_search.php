<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CnDocumentoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cn-documento-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pk_document') ?>

    <?= $form->field($model, 'cndescripcion') ?>

    <?= $form->field($model, 'cndocnota') ?>

    <?= $form->field($model, 'cndocbreve') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
