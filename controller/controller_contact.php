<?php
// On peut enregistrer les données dans la bdd
// On se connecte à la bdd
require_once("../model/connexion.php");
//On traite le formulaire
if (!empty($_POST)) {
    // POST n'est pas vide, on vérifie que toutes les données sont présentes

    if (isset($_POST["nom"], $_POST["prenom"], $_POST["email"], $_POST["mobile"], $_POST["message"]) && !empty($_POST["select"]) && !empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["email"]) && !empty($_POST["message"])) {
        // le formulaire est complet
        // On récupère les données en les protégeant (failles XSS)
        // On retire toutes les balises
        $selecte = strip_tags($_POST["select"]);
        $nom = strip_tags($_POST["nom"]);
        $prenom = strip_tags($_POST["prenom"]);
        $email = strip_tags($_POST["email"]);
        $mobile = strip_tags($_POST["mobile"]);
        // On neutralise toutes les balises
        $mess = htmlspecialchars($_POST["message"]);
        // On as besoin du fichier contenant tout les appels de fonctions BDD
        include("../model/function.php");
        // Appel de fonction pour inserer les données dans la BDD
        insert_model_form($db, $selecte, $nom, $prenom, $email, $mobile, $mess);

        header('location:' . "controller_Page.php?page=contact");
    } else {
        // POST est vide
        // On arrete le processus et on indique a l'utilisateur un message
        die("le formulaire est incomplet");
    }
}
