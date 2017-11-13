<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cnplancontable */

$this->title = 'Update Cnplancontable: ' . $model->pk_plancontable;
$this->params['breadcrumbs'][] = ['label' => 'Cnplancontables', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pk_plancontable, 'url' => ['view', 'id' => $model->pk_plancontable]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cnplancontable-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
