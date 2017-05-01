<?php
namespace tolik505\vuejs;

use yii\web\AssetBundle;

/**
 * Class VueResourceAsset
 *
 * @package tolik505\vuejs
 */
class VueAxiosAsset extends AssetBundle
{
    public $sourcePath = '@bower/axios/dist';

    public function init()
    {
        parent::init();

        $this->js[] = YII_ENV_DEV ? 'axios.js' : 'axios.min.js';
    }
}
