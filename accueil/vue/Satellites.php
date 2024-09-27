<body>
    <section id="parallax">
        <img src="../accueil/ressources/parallax/stars.png" id="star" alt="background star">
        <h1 id="titre">Satellites</h1>
        <img src="../accueil/ressources/parallax/font.png" id="font" alt="background fixed">
        <a href="#second" id="explore">Voir</a>
        <p>Un satellite naturel est un objet céleste en orbite autour d'une planète ou d'un autre objet plus grand que lui-même qui n'est pas d'origine humaine, par opposition aux satellites artificiels. Ils peuvent être de grosse taille et ressembler à de petites planètes. De tels objets sont également appelés lunes, par analogie avec la Lune, le satellite naturel de la Terre.

            Techniquement, le terme pourrait s'appliquer à une planète orbitant une étoile, ou même une étoile orbitant un centre galactique, mais une telle utilisation est rare. En temps normal, il désigne les satellites naturels des planètes, planètes naines et petits corps.</p>
    </section>

    <section id="second">
        <h1>Vous pouvez afficher les cartes de chacun des satellites en les survolant</h1>
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
                            <a href="controller_Page.php?page=satellite_profil&nom=<?= $objet["nom_Objet"] ?>">En savoir plus</a>
                        </div>
                        <img src="<?= $objet["url_img_Objet"] ?>" alt="<?= $objet["nom_Objet"] ?>">
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </section>
</body>

</html>