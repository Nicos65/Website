<footer class="contact" id="ancre_5">
    <hr class="hr-contact">
    <div class="services">
        <div class="part_1">
            <div class="service">
                <h3>Catégories</h3>
                <nav>
                    <ul>
                        <li><a href="controller_Page.php?page=news">News</a></li>
                        <li><a href="controller_Page.php?page=Planetes">Planètes</a></li>
                        <li><a href="controller_Page.php?page=Satellites">Satellites</a></li>
                        <li><a href="controller_Page.php?page=Asteroides">Asteroïde</a></li>
                    </ul>
                </nav>
            </div>

            <div class="service">
                <h3>aide & information</h3>
                <nav>
                    <ul>
                        <li><a href="controller_Page.php?page=Mention">Mention légales</a></li>
                        <li><a href="controller_Page.php?page=Politique">Politique de confidentialité</a></li>
                        <li><a href="controller_Page.php?page=Contact">Contact</a></li>
                    </ul>
                </nav>
            </div>

            <div class="service">
                <h3>nous suivre</h3>
                <nav>
                    <ul>
                        <li><a href="https://www.facebook.com/profile.php?id=100089621671053">Facebook</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Linkedin</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div>
            <form action="controller_mail.php" method="post">
                <!-- Redirection -->
                <div class="service">
                    <h3>restez informé</h3>
                    <input type="email" id="mail" name="mail" class="inp-form">
                    <input type="checkbox" name="cond" id="cond" required>
                    <label for="cond">En vous inscrivant, vous acceptez de vous conformer à la <a href="Politique.php">Politique de Confidentialité</a>.</label>
                    <input type="submit" value="S'ABONNER" class="inp-form">
                </div>
            </form>
        </div>
        <div id="reseaux">
            <a href="https://www.facebook.com/profile.php?id=100089621671053">
                <div><img src="..\accueil\ressources\icons\FacebookIcon.png"></div>
            </a>
            <a href="">
                <div><img src="..\accueil\ressources\icons\InstagramIcon.png"></div>
            </a>
            <a href="">
                <div><img src="..\accueil\ressources\icons\TwitterIcon.png"></div>
            </a>
            <a href="">
                <div><img src="..\accueil\ressources\icons\tiktok.png"></div>
            </a>
        </div>
    </div>
</footer>
<script src="../accueil/Js/gsap.min.js"></script>
<script src="../accueil/Js/main.js"></script>
<script type="module" src="../accueil/Js/spline.js"></script>