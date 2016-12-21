<?php
/**
 * @var $this \yii\web\View
 */

use yii\widgets\Breadcrumbs;

?>


<?= Breadcrumbs::widget([
    'homeLink' => [
        'label' => 'Home',
        'url' => '/' . ($this->context ? $this->context->module->id : null),
    ],
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]) ?>