<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cncuentacte */

$this->title = $model->pk_cuentacte;
$this->params['breadcrumbs'][] = ['label' => 'Cncuentactes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cncuentacte-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->pk_cuentacte], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->pk_cuentacte], [
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
            'pk_cuentacte',
            'cncodigo',
            'cnnombre',
            'cndireccion',
            'cntelefono',
            'cntelefax',
            'cnnit',
            'cncontacto',
            'cnestado',
        ],
    ]) ?>

</div>
