<?php snippet('header', array('sticky' => true)) ?>
<main>
    <div class="container pt-5">
        <h1><?= $page->title()->html() ?></h1>
        
        <?php foreach($page->children()->listed() as $item):  ?>
            <div class="row justify-content-center">
                <?php snippet('vcard', array('data' => $item)) ?>
            </div>
        <?php endforeach ?>
    </div>
</main>

<?php snippet('footer/footerbar') ?>
<?php snippet('scripts') ?>

</body>
</html>