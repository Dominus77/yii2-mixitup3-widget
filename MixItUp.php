<?php

namespace dominus77\mixitup3;

use yii\helpers\Html;
use yii\web\JsExpression;
use yii\helpers\Json;
use dominus77\mixitup3\assets\MixItUpAsset;

/**
 * Class MaxItUp
 * @package dominus77\mixitup3
 */
class MixItUp extends \yii\base\Widget
{
    public $id = '';
    public $controlItems = [];
    public $contentItems = [];
    public $clientOptions = [];

    private $_controlID;
    private $_containerID;

    /**
     * Initializes the widget
     */
    public function init()
    {
        parent::init();
        $this->id = (!empty($this->id)) ? $this->id : $this->getId();
        $this->_controlID = 'controls_' . $this->id;
        $this->_containerID = 'container_' . $this->id;
        $this->registerAssets();
    }

    public function run()
    {
        echo Html::beginTag('div', ['id' => $this->_controlID]);
        foreach ($this->controlItems as $item) {
            echo $item . PHP_EOL;
        }
        echo Html::endTag('div') . PHP_EOL;

        echo Html::beginTag('div', ['id' => $this->_containerID]);
        foreach ($this->contentItems as $item) {
            echo $item . PHP_EOL;
        }
        echo Html::endTag('div') . PHP_EOL;
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
            var container_{$this->id} = document.querySelector('#{$this->_containerID}');
            var mixer_{$this->id} = mixitup(container_{$this->id}, {$options});
        ");
        $view->registerJs($script);
    }
}
