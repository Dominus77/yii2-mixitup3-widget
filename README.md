yii2-mixitup3-widget
======
Renders a [MixItUp 3](https://github.com/patrickkunka/mixitup/) widget for Yii2.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require dominus77/yii2-mixitup3-widget "*"
```

or add

```
"dominus77/yii2-mixitup3-widget": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \dominus77\mixitup3\MixItUp::widget([
    'containerId' => 'mix_container',
    'content' => $this->render('@vendor/dominus77/mixitup3/views/basic'), // example
    'clientOptions' => [
        'animation' => [
            'enable' => true,
        ],
        'selectors' => [
            'target' => '.mix',
            'control' => '[data-mixitup-control]',
        ],
    ],
]); ?>
```
views\basic.php
```php
<?php

use dominus77\mixitup3\assets\ExampleBasicAsset;

ExampleBasicAsset::register($this);
?>

<div id="mix_controls">
    <button type="button" class="control" data-mixitup-control data-filter="all" >All</button>
    <button type="button" class="control" data-mixitup-control data-filter=".green" >Green</button>
    <button type="button" class="control" data-mixitup-control data-filter=".blue" >Blue</button>
    <button type="button" class="control" data-mixitup-control data-filter=".pink" >Pink</button>
    <button type="button" class="control" data-mixitup-control data-filter="none" >None</button>

    <button type="button" class="control" data-mixitup-control data-sort="default:asc">Asc</button>
    <button type="button" class="control" data-mixitup-control data-sort="default:desc">Desc</button>
    
    <div class="control text" data-mixitup-control data-sort="random">Shuffle</div>
</div>

<div id="mix_container">
    <div class="mix green"><span>1</span></div>
    <div class="mix green"><span>2</span></div>
    <div class="mix blue"><span>3</span></div>
    <div class="mix pink"><span>4</span></div>
    <div class="mix green"><span>5</span></div>
    <div class="mix blue"><span>6</span></div>
    <div class="mix pink"><span>7</span></div>
    <div class="mix blue"><span>8</span></div>

    <div class="gap"></div>
    <div class="gap"></div>
    <div class="gap"></div>
</div>
```

More Information
-----
Please, check the [MixItUp 3](https://github.com/patrickkunka/mixitup/)

License
-----
The BSD License (BSD). Please see [License File](https://github.com/Dominus77/yii2-mixitup3-widget/blob/master/LICENSE.md) for more information.