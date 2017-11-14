<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cndetcomprobante */

$this->title = 'Create Cndetcomprobante';
$this->params['breadcrumbs'][] = ['label' => 'Cndetcomprobantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cndetcomprobante-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
