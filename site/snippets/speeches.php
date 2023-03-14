<?php foreach ($page->children()->listed() as $key => $value): ?>
    <div id="<? $key ?>" class="container mt-5 js--section-speach">
        <?php snippet(strtolower($value->intendedTemplate()), ['data' => $value]) ?>
    </div>
<?php endforeach ?>