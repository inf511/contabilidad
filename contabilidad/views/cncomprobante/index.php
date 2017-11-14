<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CncomprobanteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cncomprobantes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cncomprobante-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cncomprobante', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pk_comprobante',
            'cncodcomp',
            'cntcomp',
            'cnnrocomp',
            'cnfechacomp',
            // 'fkmoneda',
            // 'cntcambio',
            // 'fkbanco',
            // 'cncliente',
            // 'cnglosa',
            // 'cnestado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
