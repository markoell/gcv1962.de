<?php
// Standart Template um Seiten mit unterbereichen anzulegen.
// Es können Unterordner mit eigenen Templates angelegt werden.
// Es wird nur über alle Unterordner iteriert und deren Template als Snippet aufegrufen
?>

<?php snippet('header', array('sticky' => true)) ?>
<main>
    <div class="py-5">
        <h1><?= $page->title()->html() ?></h1>

        <?php if (count($sections) > 0) : ?>
            <?php $n = 0;
            foreach ($sections as $section) : ?>
                <section id="<?= html($section->uid()) ?>" class="mx-3">
                    <?php snippet(strtolower($section->intendedTemplate()), array('data' => $section)) ?>
                </section>
            <?php endforeach ?>
        <?php else : ?>
            <div class="container">
                <?= $page->text()->kirbytext() ?>
            </div>
        <?php endif ?>
    </div>
</main>

<?php snippet('footer/footerbar') ?>
<?php snippet('scripts') ?>

</body>
</html>