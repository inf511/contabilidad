<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cncuentacte */

$this->title = 'Create Cuenta';
$this->params['breadcrumbs'][] = ['label' => 'Cncuentactes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cncuentacte-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
