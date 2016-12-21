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

namespace ics042\AdminBsb;

/**
 * Description of MaterializeAsset
 *
 * @author Ben
 */
class AdminBsbAsset extends \yii\web\AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@vendor/bower/adminbsb-materialdesign';

    /**
     * @var array
     */
    public $css = [
        '//fonts.googleapis.com/icon?family=Material+Icons',
        '//fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext',
        'plugins/node-waves/waves.css',
        'plugins/animate-css/animate.css',
        'css/style.css'
        ];

    /**
     * @var array
     */
    public $js = [
        'plugins/bootstrap-select/js/bootstrap-select.js',
        'plugins/jquery-slimscroll/jquery.slimscroll.js',
        'plugins/node-waves/waves.js',
        'js/admin.js'
        ];

    /**
     * @var array
     */
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapPluginAsset',        
    ];
    
    /**
     * @var string
     */
    public static $skin = Theme::SKIN_RED;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        if (static::$skin) {
            $this->css[] = sprintf('css/themes/theme-%s.min.css', static::$skin);
        }
    }
}