<?php

namespace dominus77\mixitup3\assets;

use yii\web\AssetBundle;

/**
 * Class ExampleBasicAsset
 * @package dominus77\mixitup3\assets
 */
class ExampleBasicAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath;

    /**
     * @var array
     */
    public $js = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . '/src';
        $this->css = [
            'css/reset.css',
            'css/basic.css',
        ];
    }

    /**
     * @var array
     */
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
