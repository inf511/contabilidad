<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CnDocumento */

$this->title = 'Create Cn Documento';
$this->params['breadcrumbs'][] = ['label' => 'Cn Documentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cn-documento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
