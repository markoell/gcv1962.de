<?php snippet('header', array('sticky' => true)) ?>

<div class="container pt-5">
    <h1><?php echo $page->title()->html() ?></h1>

    <?php $n = 0; foreach($children as $child): $n++; ?>
        <?php if($n == 1 || $n%3 == 2): ?>
            <div class="row">
        <?php endif ?>
        <?php snippet($child->intendedTemplate(), array('data' => $child)) ?>
        <?php if($n == 1 || $n%3 == 1): ?>
            </div>
        <?php endif ?>
    <?php endforeach ?>
</div>

<?php snippet('scripts') ?>
<?php snippet('footer') ?>