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
 * Class ThemeAsset
 */
class ThemeAsset extends \yii\web\AssetBundle
{
    /**
     * @var array
     */
    public $depends = [
        'yii\web\YiiAsset',
        'ics042\AdminBsb\AdminBsbAsset'
    ];

    public $css = [
        'css/style.css'
    ];
    /**
     * @var array
     */
    public $publishOptions = [
        'forceCopy' => true
    ];

    /**
     * set the source path to the local assets directory
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
    }
}
