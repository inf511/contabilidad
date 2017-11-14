<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cnbanco */

$this->title = $model->pk_banco;
$this->params['breadcrumbs'][] = ['label' => 'Cnbancos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnbanco-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->pk_banco], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->pk_banco], [
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
            'pk_banco',
            'cncodigo',
            'cnnombre',
            'cndireccion',
            'cnobservacion',
        ],
    ]) ?>

</div>
