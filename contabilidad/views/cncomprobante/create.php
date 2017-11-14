<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cncomprobante */

$this->title = 'Create Cncomprobante';
$this->params['breadcrumbs'][] = ['label' => 'Cncomprobantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cncomprobante-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
