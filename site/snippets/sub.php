<div class="row justify-content-end">
<?php if($data->hasImages()): ?>
    <div class="col-md-5">
    <div class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
        <?php $i = 0; foreach($data->images() as $image): $i++; ?>
        <?php $dimensions = $image->dimensions(); ?>
        <?php $thumb = $image->resize($i == 1 ? 450 : 50 ) ?>
        <figure class="figure" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
            <a href="<?= $image->url() ?>" itemprop="contentUrl" data-size="<?= $dimensions->width() . 'x' . $dimensions->height() ?>" data-med-size="1024x683">
                <img src="<?= $thumb->url() ?>" class="figure-img img-fluid" itemprop="thumbnail" alt="Image description" />
            </a>
            <figcaption class="figure-caption" itemprop="caption description"><?= $image->text() ?></figcaption>
        </figure>
        <?php endforeach ?>
    </div>
    </div>
<?php endif ?>
<div class="col-md-7">
    <div class="card-text"><?php echo $data->text()->kirbytext() ?></div>
</div>
</div>