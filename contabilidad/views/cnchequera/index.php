<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CnchequeraSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Chequeras';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnchequera-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Chequera', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pk_chequera',
            'fkbanco',
            'fkcuentacontable',
            'cndescripcion',
            'cnnroinicio',
            // 'cnnrofin',
            // 'cnhabilitar',
            // 'cnestado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
