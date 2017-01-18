<?php

namespace ics042\AdminBsb\widgets;

use yii\grid\GridViewAsset;
use yii\helpers\Html;
use yii\helpers\Json;

class GridCard extends \yii\grid\GridView
{
    /**
     * @var string|null
     */
    public $title;

    /**
     * @var string
     */
    public $headerTools = '';

    /**
     * @var array
     */
    public $cardOptions = [];

    /**
     * @var array
     */
    protected $defaultCardOptions = [];

    /**
     * @var array
     */
    public $summaryOptions = ['class' => 'summary pull-left'];

    /**
     * Runs the widget.
     */
    public function run()
    {
        $id = $this->options['id'];
        $options = Json::htmlEncode($this->getClientOptions());
        $view = $this->getView();
        GridViewAsset::register($view);
        $view->registerJs("jQuery('#$id').yiiGridView($options);");

        $options = array_merge($this->defaultCardOptions, [
            'options' => $this->options,
            'title' => $this->title,
            'headerTools' => $this->headerTools,
            'content' => '<div class="table-responsive">'.$this->renderItems().'</div>',
        ], $this->cardOptions);

        echo Card::widget($options);
        echo $this->renderSummary() . Html::tag(
            'div',
            $this->renderPager(),
            ['class' => 'text-right pull-right']
        );
    }
}
