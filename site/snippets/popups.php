<?php foreach ($page->children()->listed() as $key => $value): ?>
    <div id="<?= $value->title()->html() ?>">
        <?php snippet(strtolower($value->intendedTemplate()), ['id' => $key, 'page' => $value]) ?>
    </div>
<?php endforeach ?>