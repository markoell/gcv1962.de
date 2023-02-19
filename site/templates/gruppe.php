<?php snippet('header', array('sticky' => true)) ?>
<main>
    <?php snippet($page->intendedTemplate(), array('data' => $page) ) ?>
</main>

<?php snippet('footer/footerbar') ?>
<?php snippet('scripts') ?>

</body>
</html>