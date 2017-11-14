<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cnbanco */

$this->title = 'Crear banco';
$this->params['breadcrumbs'][] = ['label' => 'bancos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnbanco-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
