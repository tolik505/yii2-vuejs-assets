<?php
namespace tolik505\vuejs;

use yii\web\AssetBundle;

/**
 * Class VueRouterAsset
 *
 * @package tolik505\vuejs
 */
class VueRouterAsset extends AssetBundle
{
    public $sourcePath = '@bower/vue-router/dist';

    public function init()
    {
        parent::init();

        $this->js[] = YII_ENV_DEV ? 'vue-router.js' : 'vue-router.min.js';
    }
}
