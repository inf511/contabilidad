<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cnusuario */

$this->title = 'Update Cnusuario: ' . $model->pkusuario;
$this->params['breadcrumbs'][] = ['label' => 'Cnusuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pkusuario, 'url' => ['view', 'id' => $model->pkusuario]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cnusuario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
