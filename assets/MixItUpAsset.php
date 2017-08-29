<?php

namespace dominus77\mixitup3\assets;

use yii\web\AssetBundle;

/**
 * Class MixItUpAsset
 * @package dominus77\mixitup3\assets
 */
class MixItUpAsset extends AssetBundle
{
    public $sourcePath = '@vendor/patrickkunka/mixitup';

    public $js = [];

    public function init()
    {
        $min = YII_ENV_DEV ? '' : '.min';
        $this->js[] = 'dist/mixitup' . $min . '.js';
    }

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}