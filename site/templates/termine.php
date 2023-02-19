<?php snippet('header', array('sticky' => true)) ?>
<main>
    <div class="container">
        <?php snippet('termine', array('data' => $page, 'filter' => '*'))?>
    </div>
</main>

<!-- TODO: Termine anzeigen -->
<?php snippet('footer/footerbar') ?>

</body>
</html>