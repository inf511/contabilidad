<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CnDocumento */

$this->title = 'Update Cn Documento: ' . $model->pk_document;
$this->params['breadcrumbs'][] = ['label' => 'Cn Documentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pk_document, 'url' => ['view', 'id' => $model->pk_document]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cn-documento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
