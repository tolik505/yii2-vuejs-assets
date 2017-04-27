<?php
namespace tolik505\vuejs;

use yii\web\AssetBundle;

/**
 * Class VueAsset
 *
 * @package tolik505\vuejs
 */
class VueAsset extends AssetBundle
{
    public $sourcePath = '@bower/vue/dist';

    public function init()
    {
        parent::init();

        $this->js[] = YII_ENV_DEV ? 'vue.js' : 'vue.min.js';
    }
}
