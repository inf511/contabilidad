<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Plan Contable';
?>
<div class="cnplancontable-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear cuenta contable', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <p>
        <?= Html::a('Generar archivo CSV', ['generatecsv'], ['class' => 'btn btn-warning']) ?>
    </p>    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cncuentacontable',
            'cndescripcion',
            [
                'attribute' => 'fkmoneda',
                'value'     => 'fkmoneda0.cndescripcion',
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
