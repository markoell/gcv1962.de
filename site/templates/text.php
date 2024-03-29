<?php snippet('header', array('sticky' => true)) ?>
<main>
    <div class="container pt-5">
        <h1><?= $page->title()->html() ?></h1>
    </div>
    <section id="<?= $page->title()->html() ?>">
        <div class="container<?= e($page->id() == "historisches/chronik"," text-justify") ?>">
            <?= $page->text()->kirbytext() ?>
        </div>
    </section>
</main>

<?php snippet('footer/footerbar') ?>
<?php snippet('scripts') ?>

</body>
</html>