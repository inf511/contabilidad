<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cndetcomprobante */

$this->title = 'Update Cndetcomprobante: ' . $model->pk_detcomprobante;
$this->params['breadcrumbs'][] = ['label' => 'Cndetcomprobantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pk_detcomprobante, 'url' => ['view', 'id' => $model->pk_detcomprobante]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cndetcomprobante-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
