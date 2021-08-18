<?php snippet('header', array('sticky' => true)) ?>

<div class="container pt-5">
    <h1><?= $page->title()->html() ?></h1>
    <?= $page->text()->kirbytext() ?>
    <?php if($document = $page->file($page->dokument())): ?>
        <div class="row mb-2">
            <a class="btn btn-success" href="<?= $document->url() ?>">Download <?= $document->filename() ?> </a>
        </div>
        <div class="row pb-2">
            <embed src="<?= $document->url() ?>" style="width:100%; height:100vh"  type='application/pdf'>
        </div>
    <?php endif ?>
</div> 

<?php snippet('scripts') ?> 
<?php snippet('footer/footerbar') ?>