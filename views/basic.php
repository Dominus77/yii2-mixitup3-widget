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
