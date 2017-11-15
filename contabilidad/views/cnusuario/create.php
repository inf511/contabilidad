<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cnusuario */

$this->title = 'Create Cnusuario';
$this->params['breadcrumbs'][] = ['label' => 'Cnusuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnusuario-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
