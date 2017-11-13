<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cnplancontable */

$this->title = $model->pk_plancontable;
$this->params['breadcrumbs'][] = ['label' => 'Cnplancontables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnplancontable-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->pk_plancontable], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->pk_plancontable], [
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
            'pk_plancontable',
            'cncuentacontable',
            'cndescripcion',
            'fkmoneda',
            'cnnivel',
            'cnctachica',
            'cnctacte',
            'cnctaflujo',
            'cnctapresu',
            'cnestado',
            'cncuentapadre',
        ],
    ]) ?>

</div>
