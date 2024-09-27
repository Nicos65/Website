<body>
    <section id="parallax">
        <img src="../accueil/ressources/parallax/stars.png" id="star" alt="background star">
        <h1 id="titre">Asteroïdes</h1>
        <img src="../accueil/ressources/parallax/font.png" id="font" alt="background fixed">
        <a href="#second" id="explore">Voir</a>
        <p>Un astéroïde est une planète mineure composée de roches, de métaux et de glaces, et dont les dimensions varient de l'ordre du mètre (limite actuelle de détection) à plusieurs centaines de kilomètres. L'appellation « en forme d'étoile » vient de l'aspect irrégulier des astéroïdes au télescope, différent du disque parfait des planètes, lors des premières observations astronomiques.</p>
    </section>

    <section id="second">
        <h1>Vous pouvez afficher les cartes de chacune des asteroïde en les survolant</h1>
        <div class="regroup">
            <?php $objets = afficheObjWithId($db, $id); ?>
            <?php foreach ($objets as $objet) : ?>
                <div class="Titre_cards">
                    <div>
                        <h1><?= $objet["nom_Objet"] ?></h1>
                    </div>
                    <div class="cards">
                        <div class="circle"></div>
                        <div class="content">
                            <h3><?= $objet["nom_Objet"] ?></h3>
                            <p><?= $objet["resum"] ?></p>
                            <a href="controller_Page.php?page=asteroide_profil&nom=<?= $objet["nom_Objet"] ?>">En savoir plus</a>
                        </div>
                        <img src="<?= $objet["url_img_Objet"] ?>" alt="<?= $objet["nom_Objet"] ?>">
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </section>
</body>

</html>