<?php snippet('header', array('sticky' => true)) ?>
<main>
<?php $n = 0; foreach($page->children()->visible() as $section): $n++; ?>
    <div id="<?= $section->uid() ?>" class="<?php e($n%2, 'even', 'odd') ?>">
        <?php snippet(strtolower($section->intendedTemplate()), array('page' => $section)) ?>
    </div>
<?php endforeach ?>
</main>

<?php snippet('footer/footerbar') ?>
<?php snippet('scripts') ?> 

</body>
</html>