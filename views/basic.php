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
    <div class="mix green"></div>
    <div class="mix green"></div>
    <div class="mix blue"></div>
    <div class="mix pink"></div>
    <div class="mix green"></div>
    <div class="mix blue"></div>
    <div class="mix pink"></div>
    <div class="mix blue"></div>

    <div class="gap"></div>
    <div class="gap"></div>
    <div class="gap"></div>
</div>