<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CnusuarioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cnusuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnusuario-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cnusuario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pkusuario',
            'fkgrupo',
            'nickname',
            'nombrecompleto',
            'apellidocompleto',
            // 'password',
            // 'estado',
            // 'email:email',
            // 'authkey',
            // 'accesstoken',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
