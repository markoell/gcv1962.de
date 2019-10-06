<div class="container">
    <h2 id="<?= $data->uid() ?>" class="section"><?= $data->title()->html() ?></h2>

    <div id="content" class=""></div>
    <?php foreach($data->children()->visible() as $section): ?>
        <div class="row" style="padding-bottom: 30px;">
            <div class="col-lg">
                <?php if($section->hasImages()): ?>
                    <img class="img-fluid rounded mx-auto d-block" src="<?= $section->image()->resize(200)->url() ?>" alt="">
                <?php else: ?>
                    <img class="img-fluid rounded" src="http://placehold.it/400x200" alt="">
                <?php endif ?>
            </div>
            <div class="col-lg-9">
                <h4 class="card-title"><?php echo $section->title() ?></h4>
                <p class="card-text"><?php echo $section->text()->kirbytext()->short(180) ?></p>
                <a href="<?= $section->url() ?>" class="btn btn-success">Weiterlesen &rarr;</a>
            </div>
        </div>
    <?php endforeach ?>
</div>
