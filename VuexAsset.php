<?php
namespace tolik505\vuejs;

use yii\web\AssetBundle;

/**
 * Class VuexAsset
 *
 * @package tolik505\vuejs
 */
class VuexAsset extends AssetBundle
{
    public $sourcePath = '@bower/vuex/dist';

    public function init()
    {
        parent::init();

        $this->js[] = YII_ENV_DEV ? 'vuex.js' : 'vuex.min.js';
    }
}
