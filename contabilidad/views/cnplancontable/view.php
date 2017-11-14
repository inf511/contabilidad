<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->cncuentacontable . " - " . $model->cndescripcion;
?>
<div class="cnplancontable-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->pk_plancontable], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->pk_plancontable], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Esta seguro de eliminar cuenta contable?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'cncuentacontable',
            'cndescripcion',
            'fkmoneda0.cndescripcion'

        ],
    ]) ?>

</div>