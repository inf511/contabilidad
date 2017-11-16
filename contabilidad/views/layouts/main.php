<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label'    => 'Otros Documentos',
            'url'   => ['#'],  
            'items' => [
                ['label' => 'Banco', 'url' => ['/cnbanco/index']],
                ['label' => 'Documento', 'url' => ['/cndocumento/index']],
                ['label' => 'Monedas', 'url' => ['/cnmoneda/index']],
                ['label' => 'Proyecto', 'url' => ['/cnproyecto/index']],
                ['label' => 'Chequeras', 'url' => ['/cnchequera/index']],
                ['label' => 'Cuenta Analitica', 'url' => ['/cncuentacte/index']],
                ]
            ],
                        
            ['label' => 'Plan contable', 'url' => ['/cnplancontable/index']],
            ['label' => 'Comprobante contable', 'url' => ['/cncomprobante/index']],
            ['label' => 'Det Comprobante', 'url' => ['/cndetcomprobante/index']],
            ['label' => 'Clasificacion', 'url' => ['/cndetcomprobante/clasificador']],            
            '<li><a data-toggle="modal" data-target="#sidebar-right" style="cursor: pointer;">Abrir Chat</a></li>', 
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Contabilidad sin fronteras <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<!-- inicio de chat box -->
<div class="modal fade right" id="sidebar-right" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <!--encabezado-->
            <div class="modal-header">
                <button type="button" 
                        class="close" 
                        data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Comunicacion</h4>
            </div>
            <!-- cuerpo -->
            <div class="modal-body">
                <ul class="nav nav-pills nav-stacked text-center lead">
                    <li role="presentation" class="active">
                        <textarea name="di" id="chat" rows="15" class="form-control" readonly></textarea>
                    </li>
                    <hr>
                    <li>
                        <input type="text" id="message" class="form-control">
                    </li>
                </ul>    
                <hr>
                <div class="btn-group-vertical center-block">
                    <a class="btn btn-success btn-lg" href="#" onClick="chat_sendMessage()">
                        <span class="glyphicon glyphicon-send"></span>  Enviar Mensaje
                    </a>
                </div>    
            </div>
        </div>
    </div>
</div>
<!-- finalizacion de chat box-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
