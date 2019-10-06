<?php snippet('header') ?>

<div class="container pt-5">
    <h1><?= $page->title()->html() ?></h1>
    
    <?php foreach($page->children()->visible() as $child):  ?>
        <div class="row justify-content-center">
            <?php snippet($child->intendedTemplate(), array('data' => $child)) ?>
        </div>
    <?php endforeach ?>
</div>
<?php snippet('scripts') ?> 
<?php snippet('footer') ?>