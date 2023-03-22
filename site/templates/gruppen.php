<?php snippet('header', ['sticky' => true]) ?>
<main>
  <div class="py-5">
    <h1><?= $page->title()->html() ?></h1>
    <?php $counter = 0; foreach ($page->children()->listed() as $key => $section): ?>
      <section id="<?= html($section->uid()) ?>" class="<? e(++$counter % 2, 'even', 'odd') ?> mx-3">
        <?php snippet([$key, strtolower($section->intendedTemplate()), 'default'], ['id' => $key, 'page' => $section]) ?>
      </section>
    <?php endforeach ?> 
  <div>
</main>

<?php snippet('footer/footerbar') ?>
<?php snippet('scripts') ?>

</body>
</html>