<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\cnmoneda */

$this->title = 'Update Cnmoneda: ' . $model->pk_moneda;
$this->params['breadcrumbs'][] = ['label' => 'Cnmonedas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pk_moneda, 'url' => ['view', 'id' => $model->pk_moneda]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cnmoneda-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
