<?php

namespace dominus77\mixitup3;

use yii\web\JsExpression;
use yii\helpers\Json;
use dominus77\mixitup3\assets\MixItUpAsset;

/**
 * Class MaxItUp
 * @package dominus77\mixitup3
 */
class MixItUp extends \yii\base\Widget
{
    public $content = '';
    public $containerId = '';
    public $clientOptions = [];

    /**
     * Initializes the widget
     */
    public function init()
    {
        parent::init();
    }

    public function run()
    {
        if($this->content) {
            $this->registerAssets();
            echo $this->content . PHP_EOL;
        }
    }

    /**
     * Register client assets
     */
    protected function registerAssets()
    {
        $options = Json::encode($this->clientOptions);
        $view = $this->getView();
        MixItUpAsset::register($view);
        $script = new JsExpression("
             mixitup('#{$this->containerId}', {$options});
        ");
        $view->registerJs($script);
    }
}
