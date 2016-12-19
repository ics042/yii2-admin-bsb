<?php
/**
 * @var $this \yii\web\View
 */
use yii\bootstrap\Html;

?>
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="text/html;charset=<?= \Yii::$app->charset ?>" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

</head>
