    <footer class="pt-2 bg-dark mt-5" >
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    
                    <div class="navbar-expand">
                        <ul class="navbar-nav">
                            <?php foreach($pages->visible()->filterby('num','>=','5') as $item): ?>
                            <li class="nav-item">
                                <a class="nav-link text-white pt-0" href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
                            </li>
                            <?php endforeach ?>
                            <li>
                                <a class="nav-link text-white pt-0" href="mailto:geschaeftsstelle@gcv1962.de?subject=Anfrage">Kontakt</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm">
                    <?php snippet('sozialMediaButtons') ?>
                </div>
                <div class="col-sm-5">
                    <span class="text-white">Copyright &copy; <?= $site->copyright() ?></span>
                </div>
                
            </div>
        </div>
    </footer>
    <?= snippet('photoswipePswpElement') ?>
</body>
</html>
