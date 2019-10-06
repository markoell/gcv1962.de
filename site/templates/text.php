<?php snippet('header') ?>

<div class="container pt-5">
    <h1><?= $page->title()->html() ?></h1>
</div> 
<section id="<?= $page->title()->html() ?>">
    <div class="container">
        <?= $page->text()->kirbytext() ?>
    </div>
</section>

<?php snippet('scripts') ?> 
<?php snippet('footer') ?>