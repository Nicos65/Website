<?php
session_start();
// On se connecte à la bdd
require_once(realpath(dirname(__FILE__) . '/../model/connexion.php'));
// On se connecte aux fonctions
require(realpath(dirname(__FILE__) . '/../model/function.php'));


if (isset($_GET["page"]) && !empty($_GET["page"])) {
    $page = $_GET["page"];
    if(isset($_GET["nom"])){
        $nom = $_GET["nom"];
    }
    $titre = "SolarSys | " . $page;
    include("../accueil/vue/header.php");
    $page .= ".php";
    $lien_nav1 = "controller_Page.php?page=news";
    $lien_nav2 = "controller_Page.php?page=Planetes";
    $lien_nav3 = "controller_Page.php?page=Satellites";
    $lien_nav4 = "controller_Page.php?page=Asteroides";
    $lien_nav5 = "controller_Page.php?page=Contact";
    switch ($page) {
        case "accueil.php":
            $lien_nav1 = "#ancre_0";
            $lien_nav2 = "#ancre_1";
            $lien_nav3 = "#ancre_2";
            $lien_nav4 = "#ancre_3";
            $lien_nav5 = "#ancre_4";
            include("../accueil/vue/nav.php");
            include("../accueil/vue/$page");
            break;
        case "Planetes.php":
            $id = 1;
            include("../accueil/vue/nav.php");
            include("../accueil/vue/$page");
            break;
        case "Satellites.php":
            $id = 2;
            include("../accueil/vue/nav.php");
            include("../accueil/vue/$page");
            break;
        case "Asteroides.php":
            $id = 3;
            include("../accueil/vue/nav.php");
            include("../accueil/vue/$page");
            break;
        case "satellite_profil.php":
            include("../accueil/vue/nav.php");
            $objet = afficheObjWithName($db, $nom);
            include("../accueil/vue/$page");
            break;
        case "asteroide_profil.php":
            include("../accueil/vue/nav.php");
            $objet = afficheObjWithName($db, $nom);
            include("../accueil/vue/$page");
            break;
        case "planete_profil.php":
            include("../accueil/vue/nav.php");
            $objet = afficheObjWithName($db, $nom);
            switch ($nom) {
                case "Mercure":
                    $spline = "https://prod.spline.design/ZTs-8HMji8uaIEWb/scene.splinecode";
                break;
                case "Vénus":
                    $spline = "https://prod.spline.design/Xv2WbR4j0GvGq24u/scene.splinecode";
                break;
                case "La Terre":
                    $spline = "https://prod.spline.design/KiX6bBlBIjCTbDy6/scene.splinecode";
                break;
                case "Mars":
                    $spline = "https://prod.spline.design/RAW5N05SHvikZ3Xw/scene.splinecode";
                break;
                case "Jupiter":
                    $spline = "https://prod.spline.design/NnSjyrJ6l9vyKDwS/scene.splinecode";
                break;
                case "Saturne":
                    $spline = "https://prod.spline.design/4oI0GQ4V9R8AJkq0/scene.splinecode";
                break;
                case "Uranus":
                    $spline = "https://prod.spline.design/9cdtLoQKjXrGVhem/scene.splinecode";
                break;
                case "Neptune":
                    $spline = "https://prod.spline.design/LtKkoY-OcS9eCKmV/scene.splinecode";
                break;
            }
            include("../accueil/vue/$page");
            break;
        default:
            include("../accueil/vue/nav.php");
            include("../accueil/vue/$page");
    }
} else {
    $page = "accueil";
    $titre = "SolarSys | " . $page;
    $page .= ".php";
    include("../accueil/vue/nav.php");
    include("../accueil/vue/$page");
}

include("../accueil/vue/footer.php");
