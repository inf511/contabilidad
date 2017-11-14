<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cnchequera */

$this->title = 'Update Cnchequera: ' . $model->pk_chequera;
$this->params['breadcrumbs'][] = ['label' => 'Cnchequeras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pk_chequera, 'url' => ['view', 'id' => $model->pk_chequera]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cnchequera-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
