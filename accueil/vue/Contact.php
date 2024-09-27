<body class="body-contact">
    <div class="home"></div>

    <section class="section_contact">
        <form action="controller_contact.php" method="post">
            <h1>Une question ou une demande?</h1>
            <select required id="select" name="select">
                <option value="" selected disabled hidden>--Choisir une demande--</option>
                <option value="Demande professionnelle">Demande professionnelle</option>
                <option value="Partenariat">Partenariat</option>
                <option value="Contacte presse">Contact presse</option>
                <option value="Problème technique">Problème technique</option>
                <option value="Question?">Question?</option>
            </select>
            <input type="text" id="nom" name="nom" placeholder="Nom *" required>
            <input type="text" id="prenom" name="prenom" placeholder="Prenom *" required>
            <input type="email" id="email" name="email" placeholder="Email *" required>
            <input type="tel" id="mobile" name="mobile" placeholder="Mobile">
            <textarea id="message" name="message" required placeholder="Un message? *"></textarea>
            <input type="submit" value="Envoyer" id="button">
        </form>

        <div class="contact-info">
            <div>
                <img src="../accueil/ressources/icons/enveloppe.png" alt="une icone enveloppe" class="carte-icon">
                <p>Solarsys.nicolas@gmail.com</p>
            </div>

            <div>
                <img src="../accueil/ressources/icons/telephone.png" alt="une icone telephone" class="carte-icon">
                <p>++33695042167</p>
            </div>

            <div>
                <img src="../accueil/ressources/icons/lieu.png" alt="une icone lieu" class="carte-icon">
                <p>7 Avenue des lilas<br>75000 Paris, FR</p>
            </div>
        </div>


    </section>
</body>

</html>