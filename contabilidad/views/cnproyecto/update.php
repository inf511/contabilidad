<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CnProyecto */

$this->title = 'Update Cn Proyecto: ' . $model->pk_proyecto;
$this->params['breadcrumbs'][] = ['label' => 'Cn Proyectos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pk_proyecto, 'url' => ['view', 'id' => $model->pk_proyecto]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cn-proyecto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
