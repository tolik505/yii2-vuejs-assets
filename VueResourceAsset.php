<?php
namespace tolik505\vuejs;

use yii\web\AssetBundle;

/**
 * Class VueResourceAsset
 *
 * @package tolik505\vuejs
 */
class VueResourceAsset extends AssetBundle
{
    public $sourcePath = '@bower/vue-resource/dist';

    public function init()
    {
        parent::init();

        $this->js[] = YII_ENV_DEV ? 'vue-resource.js' : 'vue-resource.min.js';
    }
}
