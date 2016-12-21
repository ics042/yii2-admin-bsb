<?php

/**
 *
 * @license http://opensource.org/licenses/MIT
 * @link https://github.com/ics042/yii2-admin-bsb
 * @package ics042/yii2-admin-bsb
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ics042\AdminBsb\widgets;

use yii\helpers\Html;

/**
 * Description of Card
 *
 * @author Ben
 */
class Card extends \yii\base\Widget {
    
    const HEADER_TOOLS_DEFAULT = 10;
    const HEADER_TOOLS_DROPDOWN = 20;
    
    /**
     * @var string
     */
    public $title;
    
    /**
     * @var string
     */
    public $headerColor;
    
    /**
     * @var array
     */
    public $headerTools = [];
    /**
     * @var string header dropdown type: header-dropdown, dropdown
     */
    public $headerToolsType = self::HEADER_TOOLS_DEFAULT;
    
    /**
     * @var array
     */
    public $options = [];
    
    /**
     * @var array
     */
    public $headerOptions = [];
    
    public $content;
    
    /**
     * Initializes the widget.
     */
    public function init()
    {
        parent::init();
        Html::addCssClass($this->options, ['card']);

        Html::addCssClass($this->headerOptions, ['header']);
    }
    
    public function run()
    {
        $content = [$this->renderHeader(), $this->renderBody()];
        return Html::tag('div', implode(PHP_EOL, $content), $this->options);
    }
    
    /**
     * @return string
     */
    public function renderHeader()
    {
        $html = $this->renderTitle();
        $html .= $this->renderTools();

        if (!empty($this->headerColor)) {
            Html::addCssClass($this->headerOptions, [$this->headerColor]);
        }

        return ($this->title || $this->tools) ? Html::tag('div', $html, $this->headerOptions) : '';
    }
    
    public function renderBody()
    {
        return Html::tag('div', $this->content, ['class' => 'body']);
    }
    
    /**
     * @return string
     */
    public function renderTitle()
    {
        return $this->title ? Html::tag('h2', $this->title, []) : '';
    }
    
    /**
     * @return string
     */
    public function renderTools()
    {
        
        if (!empty($this->headerTools)) {
            $lis = "";
                foreach ($this->headerTools as $tool) {
                    $lis .= Html::tag('li', $tool);
                }
            if ($this->headerToolsType == self::HEADER_TOOLS_DEFAULT) {
                return Html::tag('ul', $lis, ['class' => 'header-dropdown m-r-0']);
            } else if ($this->headerToolsType == self::HEADER_TOOLS_DROPDOWN) {
                $in = Html::a('<i class="material-icons">more_vert</i>', "javascript:void(0);", 
                        [
                            "class" => "dropdown-toggle",
                            "data-toggle" => "dropdown",
                            "role" => "button",
                            "aria-haspopup" => "true",
                            "aria-expanded" => "false"
                        ]);
                $in .= Html::tag("ul", $lis, ['class' => 'dropdown-menu pull-right'] );
                $li = Html::tag("li", $in, ['class' => 'dropdown']);
                return Html::tag('ul', $li, ['class' => 'header-dropdown m-r--5']);
            }
        }
        return "";
    }
}
