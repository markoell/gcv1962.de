<!-- 
    
    Standart Template um Seiten mit unterbereichen anzulegen.
    Es können Unterordner mit eigenen Templates angelegt werden.
    Es wird nur über alle Unterordner iteriert und deren Template als Snippet aufegrufen
-->
<?php snippet('header') ?>
<div class="pt-5"></div>
<h1><?= $page->title()->html() ?></h1>

<?php if(count($sections) > 0): ?> 
<?php $n = 0; foreach($sections as $section): ?>
    <section>
        <div id="<?= $section->uid() ?>" class="<?php if( strcmp($section->intendedTemplate(), 'gruppen' ) !== 0 ) { e(++$n%2, 'even', 'odd'); } ?> mx-3">
            <?php snippet(strtolower($section->intendedTemplate()), array('data' => $section)) ?>
        </div>
    </section>    
<?php endforeach ?>
<?php else: ?>
    <div class="container">
        <?= $page->text()->kirbytext() ?>
    </div>
<?php endif ?> 
<!-- </div> -->

<?php snippet('scripts') ?> 
<?php snippet('footer') ?>