<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cnplancontable */

$this->title = 'Crear Plan Contable';
$this->params['breadcrumbs'][] = ['label' => 'Cnplancontables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnplancontable-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
