README
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
    'content' => $this->render('@vendor/dominus77/yii2-mixitup3-widget/views/content'), // example
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
views\content.php
```php
<div id="mix_controls">
    <button type="button" class="control" data-mixitup-control data-filter="all" >All</button>
    <button type="button" class="control" data-mixitup-control data-filter=".one" >One</button>
    <button type="button" class="control" data-mixitup-control data-filter=".two" >Two</button>
    <button type="button" class="control" data-mixitup-control data-filter=".three" >Three</button>
    <button type="button" class="control" data-mixitup-control data-filter="none" >None</button>
</div>

<div id="mix_container">
    <div class="mix one">1</div>
    <div class="mix one">1</div>
    <div class="mix two">2</div>
    <div class="mix three">3</div>
    <div class="mix one">1</div>
    <div class="mix two">2</div>
    <div class="mix three">3</div>
    <div class="mix two">2</div>
</div>
```

More Information
-----
Please, check the [MixItUp 3](https://github.com/patrickkunka/mixitup/)

License
-----
The BSD License (BSD). Please see [License File](https://github.com/Dominus77/yii2-mixitup3-widget/blob/master/LICENSE.md) for more information.