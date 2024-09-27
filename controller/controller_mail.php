<?php
// On se connecte à la bdd
// On peut enregistrer les données dans la bdd
require_once "../model/connexion.php";
//On traite le formulaire
if (isset($_POST["mail"]) && !empty($_POST["mail"])) {
    // le formulaire est complet
    // On récupère les données en les protégeant
    // On retire toutes les balises
    $address = strip_tags($_POST["mail"]);

    // Envoyer un mail avec mailjet
    $body = [
        'Messages' => [
            [
                'From' => [
                    'Email' => "solarsys.nicolas@gmail.com",
                    'Name' => "SolarSys"
                ],
                'To' => [
                    [
                        'Email' => $address
                    ]
                ],
                'Subject' => "Newsletter",
                'HTMLPart' => "<h2>Bonjour,</h2>
                    <h3>Merci de votre inscription a la newsletter de SolarSys</h3>
                    <p>Le site etant toujours en dévelopement nous vous enverons des news hebdomadaire sur l'espace et plus generalement la sciences</p>"
            ]
        ]
    ];
    //Initialise la session ch
    $ch = curl_init();

    //Définition des options
    //Définition de l'URL d'envoie de mailjet
    curl_setopt($ch, CURLOPT_URL, "https://api.mailjet.com/v3.1/send");
    //Définition de la methode d'envoie donc 1 = POST en HTML
    curl_setopt($ch, CURLOPT_POST, 1);
    //Définition de quoi envoier donc on encode en json le body définit plus haut
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));
    //La fonction returne le résultat en cas de succes sinon la elle returne false en cas d'échec
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //Définition de l'entete dans l'envoie des données
    curl_setopt(
        $ch,
        CURLOPT_HTTPHEADER,
        array(
            'Content-Type: application/json'
        )
    );
    //Définition des Keys (key public:Key privée)
    curl_setopt($ch, CURLOPT_USERPWD, "5ceb899e1630fabeca35bba202c5f15b:70a934639a2e9f9a0ff00be44478c7f1");

    //Exécute la session ch
    $server_output = curl_exec($ch);

    //Ferme la session ch
    curl_close($ch);

    $response = json_decode($server_output);

    //Si le message du retour de la requete response a le statut "Succes" alors le message est envoyer
    if ($response->Messages[0]->Status == 'success') {
        header("location:" . "controller_Page.php?page=succes");
    }

    // On as besoin du fichier contenant tout les appels de fonctions BDD
    include("../model/function.php");

    // Appel de fonction pour inserer les données dans la BDD
    insert_model($db, $address);
} else {
    // le formulaire est vide
    // On arrete le processus et on indique a l'utilisateur un message
    die("le formulaire est incomplet");
}
