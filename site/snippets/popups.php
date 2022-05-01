<?php if ($popups->isNotEmpty()) : ?>
    <?php $popup = $popups->first() ?>
    <div id="<?= $popup->title()->html() ?>">
        <?php snippet('popup', array('data' => $popup)) ?>
    </div>
<?php endif ?>