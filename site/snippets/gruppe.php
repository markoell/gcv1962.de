<div class="card bg-transparent border-0 pt-4">
  <h4 class="card-header bg-transparent">
    <div class="container">
      <?= $data->title()->html() ?>
    </div>
  </h4>
  <div class="card-body">
    <div class="container">
      <div class="row">
        <?php if($data->hasImages()): ?>
          <div class="col-md-5">
            <div class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
              <?php $i = 0; foreach($data->images() as $image): $i++; ?>
                <?php $dimensions = $image->dimensions(); ?>
                <?php $size = $i == 1 ? 450 : 50 ?>
                <?php $thumb = $image->resize($size) ?>
                <figure class="figure mb-0" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
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
    </div>
  </div>
</div>
