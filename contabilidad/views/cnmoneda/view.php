<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\cnmoneda */

$this->title = $model->pk_moneda;
$this->params['breadcrumbs'][] = ['label' => 'Cnmonedas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnmoneda-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->pk_moneda], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->pk_moneda], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'pk_moneda',
            'cnsimbolo',
            'cndescripcion',
        ],
    ]) ?>

</div>
