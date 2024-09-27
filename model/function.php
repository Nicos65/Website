<?php

/*-----------------------------------------------------GET-----------------------------------------------------*/
function afficheObjWithId($db, $id)
{
    try {
        // On écrit la requête
        $sql = "SELECT * FROM objet WHERE id_Categories = $id";
        // On exécute la requête
        $requete = $db->query($sql);
        // On récupère les données
        return $requete->fetchAll();
    } catch (Exception $e) {
        die("error : " . $e->getMessage());
    }
}

function afficheObjWithName($db, $name)
{
    try {
        // On écrit la requête
        $sql = "SELECT * FROM objet WHERE nom_Objet = '$name'";
        // On exécute la requête
        $requete = $db->query($sql);
        // On récupère les données
        return $requete->fetchAll();
    } catch (Exception $e) {
        die("error : " . $e->getMessage());
    }
}

function afficheNews($db)
{
    try {
        // On écrit la requête
        $sql = "SELECT * FROM article";
        // On exécute la requête
        $requete = $db->query($sql);
        // On récupère les données
        return $requete->fetchAll();
    } catch (Exception $e) {
        die("error : " . $e->getMessage());
    }
}

/*-----------------------------------------------------INSERT-----------------------------------------------------*/
function insert_model($db, $address)
{
    try {
        // On écrit la requête
        $sql = "INSERT INTO `newsletter`(`email_Newsletter`) VALUES (:mail)";

        // On prépare la requête
        $query = $db->prepare($sql);

        // On injecte les valeurs
        $query->bindValue(":mail", $address, PDO::PARAM_STR);

        $query->execute();
        $query->closeCursor();
    } catch (Exception $e) {
        die("error : " . $e->getMessage());
    }
}

function insert_model_form($db, $selecte, $nom, $prenom, $email, $mobile, $mess)
{
    try {
        // On écrit la requête
        $sql = "INSERT INTO `formulaire`(`demande_Formulaire`,`nom_Formulaire`,`prenom_Formulaire`,`email_Formulaire`,`tel_Formulaire`,`mess_Formulaire`) VALUES (:selecte, :nom, :prenom, :email, :mobile, :mess)";

        // On prépare la requête
        $query = $db->prepare($sql);

        // On injecte les valeurs
        $query->bindValue(":selecte", $selecte, PDO::PARAM_STR);
        $query->bindValue(":nom", $nom, PDO::PARAM_STR);
        $query->bindValue(":prenom", $prenom, PDO::PARAM_STR);
        $query->bindValue(":email", $email, PDO::PARAM_STR);
        $query->bindValue(":mobile", $mobile, PDO::PARAM_STR);
        $query->bindValue(":mess", $mess, PDO::PARAM_STR);

        $query->execute();
        $query->closeCursor();
    } catch (Exception $e) {
        die("error : " . $e->getMessage());
    }
}
