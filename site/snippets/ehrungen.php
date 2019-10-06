
<?php $n = 0; foreach($page->children()->visible() as $orden): $n++; ?>
    <div id="<?= $section->uid() ?>" class="<?php e($n%2, 'even', 'odd') ?>">
        <?php snippet(strtolower($section->intendedTemplate()), array('data' => $section)) ?>
    </div>
<?php endforeach ?>
