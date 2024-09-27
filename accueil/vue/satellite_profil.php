<body>

    <div class="home"></div>

    <section class="affiche">
        <div class="informations">
            <img class="cool" src="<?= $objet["0"]["url_img_Objet"] ?>">

            <div>
                <ul>
                <?= nl2br($objet["0"]["carr_Objet"]) ?>
                </ul>
            </div>
        </div>

        <div class="desc">
            <h1><?= $objet["0"]["nom_Objet"] ?></h1>
            <p>
            <?= nl2br($objet["0"]["txt_Objet"]) ?>
            </p>
        </div>
    </section>
</body>

</html>