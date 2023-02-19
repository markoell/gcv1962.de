<?php snippet('header', array('sticky' => true)) ?>
<main>
    <div class="container pt-5">
        <h1><?= $page->title()->html() ?></h1>
        <?= $page->text()->kirbytext() ?>
        <?php 
            $document = $page->file($page->dokument());
            if(!is_null($document)): 
        ?>
            <div class="row mb-2">
                <a class="btn btn-success" href="<?= $document->url() ?>">Download <?= $document->filename() ?> </a>
            </div>
            <div class="row pb-2">
                <embed src="<?= $document->url() ?>" style="width:100%; height:100vh"  type='application/pdf'>
            </div>
        <?php endif ?>
    </div> 
</main>

<?php snippet('footer/footerbar') ?>
<?php snippet('scripts') ?>

</body>
</html>