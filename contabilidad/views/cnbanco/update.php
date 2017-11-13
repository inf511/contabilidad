<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cnbanco */

$this->title = 'Update Cnbanco: ' . $model->pk_banco;
$this->params['breadcrumbs'][] = ['label' => 'Cnbancos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pk_banco, 'url' => ['view', 'id' => $model->pk_banco]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cnbanco-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
