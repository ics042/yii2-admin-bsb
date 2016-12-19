<?php

use yii\bootstrap\Html;
use app\assets\AppAsset;

$bundle = AppAsset::register($this);

?>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->

<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="/"><?= Html::img($bundle->baseUrl.'/img/logo.png', ['alt' => \Yii::$app->name]) ?></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                
                <?php if (method_exists($this->context->module, 'getTopItems')): ?>
                    <?php foreach ($this->context->module->getTopItems($this->context) as $topMenu): ?>
                        <li>
                            <a href="<?= $topMenu['url'][0] ?>" class="waves-effect waves-block">
                                <?= $topMenu['label'] ?></a>
                        </li>
                    <?php endforeach; ?>
                <?php endif ?>
            </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->