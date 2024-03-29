<?php
    $image = $page->image();
?>

<?php snippet('header', array('sticky' => true)) ?>
<main>
    <?php if($image): ?>
        <div class="container-fluid">
            <img src="<?= $image->url() ?>" class="img-fluid w-100" alt="TODO" >
        </div>
    <?php endif ?>

    <div class="container pt-3">
        <h1 class="pb-2"><?= $page->title()->html() ?></h1>
        <?= $page->text()->kirbytext() ?>
    </div>
</main>

<?php snippet('footer/footerbar') ?>
<?php snippet('scripts') ?>

</body>
</html>