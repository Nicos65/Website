<body>
    <section id="parallax">
        <img src="../accueil/ressources/parallax/stars.png" id="star" alt="background star">
        <img src="../accueil/ressources/parallax/font.png" id="font" alt="background fixed">
        <h1 id="titre">planètes</h1>
        <a href="#second" id="explore">Voir</a>
        <p>Une planète est un corps céleste orbitant autour du Soleil ou d'une autre étoile,
            possédant une masse suffisante pour que sa gravité la maintienne en équilibre hydrostatique,
            c'est-à-dire sous une forme presque sphérique, et ayant « nettoyé le voisinage de son orbite »,
            c'est-à-dire éliminé tout objet de taille comparable se déplaçant sur son orbite ou sur une orbite proche.
            Par extension, on qualifie parfois aussi de planètes les objets libres de masse planétaire ou tout objet qui est un grand corps astronomique arrondi n'étant ni une étoile, ni son vestige.</p>
    </section>

    <section id="second">
        <h1>Vous pouvez afficher les cartes de chacune des planètes en les survolant</h1>
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
                            <a href="controller_Page.php?page=planete_profil&nom=<?= $objet["nom_Objet"] ?>">En savoir plus</a>
                        </div>
                        <img src="<?= $objet["url_img_Objet"] ?>" alt="<?= $objet["nom_Objet"] ?>">
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </section>
</body>

</html>