<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cndetcomprobante */

$this->title = $model->pk_detcomprobante;
$this->params['breadcrumbs'][] = ['label' => 'Cndetcomprobantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cndetcomprobante-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->pk_detcomprobante], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->pk_detcomprobante], [
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
            'pk_detcomprobante',
            'fkcomprobante',
            'fkcuentacontable',
            'cndebe',
            'cnhaber',
            'fkctacte',
            'fkproyecto',
            'fkdocument',
            'cnnrodoc',
            'cnglosadet',
        ],
    ]) ?>

</div>
