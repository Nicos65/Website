<body>
    <div class="home"></div>

    <!-- template pour afficher news -->
    <section id="second">
    <h1>News</h1>
        <div class="regroup">
            <?php $objet = afficheNews($db); ?>
            <?php foreach ($objet as $objet) : ?>
                <div class="news">
                    <div class="div_img_news">
                        <img src="<?= $objet["url_img_Article"] ?>" alt="<?= $objet["url_img_Article"] ?>">
                    </div>
                    <div>
                        <h1><?= $objet["titre_Article"] ?></h1>
                        <div>
                            <p class="p_news"><?= $objet["mess_Article"] ?></p>
                            <p class="date_news"><?= $objet["date_Article"] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </section>
</body>

</html>