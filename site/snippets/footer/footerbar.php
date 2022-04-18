    <footer class="bg-dark py-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">

            <ul class="nav">
              <?php foreach (pages(['footer'])->children()->listed() as $item): ?>
              <li class="nav-item">
                <a class="nav-link text-white"
                  href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
              </li>
              <?php endforeach ?>
              <li>
                <a class="nav-link text-white"
                  href="mailto:geschaeftsstelle@gcv1962.de?subject=Anfrage">Kontakt</a>
              </li>
            </ul>

          </div>
          <div class="col-lg my-auto">
            <?php snippet('footer/sozialMediaButtons') ?>
          </div>
          <div class="col-lg-5 my-auto">
            <span class="text-white">Copyright &copy; <?= $site->copyright() ?></span>
          </div>

        </div>
      </div>
    </footer>
    <?= snippet('footer/photoswipePswpElement') ?>
    </body>

    </html>