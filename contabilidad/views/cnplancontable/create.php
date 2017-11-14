<?php

use yii\helpers\Html;

$this->title = 'Cuenta contable';
?>
<div class="cnplancontable-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
