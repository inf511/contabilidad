<?php

use yii\helpers\Html;

$this->title = 'Editanto cuenta contable';
?>
<div class="cnplancontable-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>