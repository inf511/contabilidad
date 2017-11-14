<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cncuentacte */

$this->title = 'Update Cncuentacte: ' . $model->pk_cuentacte;
$this->params['breadcrumbs'][] = ['label' => 'Cncuentactes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pk_cuentacte, 'url' => ['view', 'id' => $model->pk_cuentacte]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cncuentacte-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
