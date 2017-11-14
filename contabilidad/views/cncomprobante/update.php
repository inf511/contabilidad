<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cncomprobante */

$this->title = 'Update Cncomprobante: ' . $model->pk_comprobante;
$this->params['breadcrumbs'][] = ['label' => 'Cncomprobantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pk_comprobante, 'url' => ['view', 'id' => $model->pk_comprobante]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cncomprobante-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
