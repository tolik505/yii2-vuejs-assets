<?php
namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class VueAsset
 *
 * @package frontend\assets
 */
class VueAsset extends AssetBundle
{
    public $sourcePath = '@bower/vue/dist';

    public $js = [
        
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
