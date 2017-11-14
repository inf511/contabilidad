<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cnchequera */

$this->title = 'Crear Chequera';
$this->params['breadcrumbs'][] = ['label' => 'Chequeras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnchequera-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
