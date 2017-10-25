<?php

namespace dominus77\mixitup3\assets;

use yii\web\AssetBundle;

/**
 * Class ExampleBasicAsset
 * @package dominus77\mixitup3\assets
 */
class ExampleBasicAsset extends AssetBundle
{
    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets/src';
        $this->css = [
            'css/reset.css',
            'css/basic.css',
        ];
    }

    public
        $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}