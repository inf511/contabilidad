<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CnplancontableSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Plan Contables';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnplancontable-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Plan Contable', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pk_plancontable',
            'cncuentacontable',
            'cndescripcion',
            'fkmoneda',
            'cnnivel',
            // 'cnctachica',
            // 'cnctacte',
            // 'cnctaflujo',
            // 'cnctapresu',
            // 'cnestado',
            // 'cncuentapadre',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
