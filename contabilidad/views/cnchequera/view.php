<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cnchequera */

$this->title = $model->pk_chequera;
$this->params['breadcrumbs'][] = ['label' => 'Cnchequeras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnchequera-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->pk_chequera], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->pk_chequera], [
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
            'pk_chequera',
            'fkbanco',
            'fkcuentacontable',
            'cndescripcion',
            'cnnroinicio',
            'cnnrofin',
            'cnhabilitar',
            'cnestado',
        ],
    ]) ?>

</div>
