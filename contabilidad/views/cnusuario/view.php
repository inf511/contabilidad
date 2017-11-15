<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cnusuario */

$this->title = $model->pkusuario;
$this->params['breadcrumbs'][] = ['label' => 'Cnusuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnusuario-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->pkusuario], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->pkusuario], [
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
            'pkusuario',
            'fkgrupo',
            'nickname',
            'nombrecompleto',
            'apellidocompleto',
            'password',
            'estado',
            'email:email',
            'authkey',
            'accesstoken',
        ],
    ]) ?>

</div>
