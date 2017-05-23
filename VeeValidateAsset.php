<?php
namespace tolik505\vuejs;

use yii\web\AssetBundle;

/**
 * Class VeeValidateAsset
 *
 * @package tolik505\vuejs
 */
class VeeValidateAsset extends AssetBundle
{
    public $sourcePath = '@bower/vee-validate/dist';

    public function init()
    {
        parent::init();

        $this->js[] = YII_ENV_DEV ? 'vee-validate.js' : 'vee-validate.min.js';
    }
}
