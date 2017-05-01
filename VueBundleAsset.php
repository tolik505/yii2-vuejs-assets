<?php
namespace tolik505\vuejs;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class VueBundleAsset
 *
 * @package tolik505\vuejs
 */
class VueBundleAsset extends AssetBundle
{
    public $depends = [
        'tolik505\vuejs\VueAsset',
        'tolik505\vuejs\VueAxiosAsset',
    ];
}
