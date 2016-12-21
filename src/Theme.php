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
 * Class Theme
 *
 * @property $skin string;
 */
class Theme extends \yii\base\Theme
{
    const SKIN_BLACK = 'black';
    const SKIN_BLUE = 'blue';
    const SKIN_BLUE_GREY = 'blue-grey';
    const SKIN_CYAN = 'cyan';
    const SKIN_ORANGE = 'orange';
    const SKIN_GREEN = 'green';
    const SKIN_LIGHT_BLUE = 'light-blue';
    const SKIN_RED = 'red';
    const SKIN_YELLOW = 'yellow';
    const SKIN_PURPLE = 'purple';
    
    /**
     * @var string
     */
    public $root = '@app';

    /**
     * @var array
     */
    public $topMenuItems = [];

    /**
     * @var array
     */
    public $mainMenuItems = [];

    /**
     *  Set the basePath of the theme, the
     */
    public function init()
    {
        parent::init();
        $this->basePath = __DIR__;
        $this->skin = isset($this->skin) ? $this->skin : self::SKIN_RED;
        AdminBsbAsset::$skin = $this->skin;

        if (!$this->pathMap) {
            $this->createPathMap();
        }
    }

    /**
     * @throws \yii\base\InvalidConfigException
     */
    protected function createPathMap()
    {
        $this->pathMap = [
            $this->root.'/views' => [
                $this->root.'/views',
                $this->getPath('views'),
            ],
        ];
    }
    
    /**
     * @param $skin
     */
    public function setSkin($skin)
    {
        AdminBsbAsset::$skin = $skin;
    }

    /**
     * @return string
     */
    public function getSkin()
    {
        return AdminBsbAsset::$skin;
    }
}
