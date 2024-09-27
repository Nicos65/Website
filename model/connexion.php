<?php
// Constantes d'environement
define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "");
define("DBNAME", "solarsys");

// DSN de connexion
$dsn = "mysql:dbname=" . DBNAME . ";host=" . DBHOST;

// On se connecte a la base
try {
    // On instancie PDO
    $db = new PDO($dsn, DBUSER, DBPASS);

    // On s'assure d'envoyer les données en UTF8
    $db->exec("SET NAMES utf8");

    // On définit le mode de "fetch" par défaut
    $db->setAttribute(
        PDO::ATTR_DEFAULT_FETCH_MODE,
        PDO::FETCH_ASSOC
    );
} catch (PDOException $e) {
    die($e->getMessage());
}

// On est connectés a la bdd
