<?php snippet('header', array('sticky' => true)) ?>

<div class="container pt-5">
    <h1><?= $page->title()->html() ?></h1>
    <p><?= $page->text()->kirbytext() ?></p>
    <?php if($page->hasImages()): ?> 
        <img class="img-fluid pb-2" src="<?= $page->image()->url() ?>"> 
    <?php endif ?>
</div>

<?php snippet('scripts') ?> 
<?php snippet('footer') ?>