<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CndetcomprobanteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cndetcomprobantes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cndetcomprobante-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cndetcomprobante', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pk_detcomprobante',
            'fkcomprobante',
            'fkcuentacontable',
            'cndebe',
            'cnhaber',
            // 'fkctacte',
            // 'fkproyecto',
            // 'fkdocument',
            // 'cnnrodoc',
            // 'cnglosadet',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
