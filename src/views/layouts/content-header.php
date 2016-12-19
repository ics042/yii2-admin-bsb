<?php
/**
 * @var $this \yii\web\View
 */

use yii\bootstrap\Html;
use yii\widgets\Breadcrumbs;

?>

<section class="content-header">
    <h1>
        <?= Html::encode($this->title) ?>
    </h1>

    <?= Breadcrumbs::widget([
        'homeLink' => [
            'label' => 'Home',
            'url' => '/' . ($this->context ? $this->context->module->id : null),
        ],
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
</section>