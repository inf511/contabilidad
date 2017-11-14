<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\cnmoneda */

$this->title = 'Crear Moneda';
$this->params['breadcrumbs'][] = ['label' => 'Monedas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnmoneda-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
