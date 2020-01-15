<?php
// Connexion à la base de donnée
require '../app/views/db.php'; // => $pdo est définit globalement
// require 'inc/DBData.php'; // => couche POO d'accès aux données de la BDD
// $db = new DBData($pdo);

require '../app/classes/dresseurs.php';
$dresseur = new Dresseur();

// Voir si un formulaire a été envoyé
if (!empty($_POST)) {

    // Vérifier si le champ name n'est pas vide 
    $name = $_POST['name'];
    if (empty($name)) {
        header('Location: index.php');
    }

    $dresseur->ajoutDresseur($name);
}



$dresseurs = $dresseur->carteDresseur();


$page = 'home';

// Affichage
require __DIR__.'/../app/views/header.tpl.php';
// On rend dynamique le chargement du template
require __DIR__.'/../app/views/' . $page . '.tpl.php';
require __DIR__.'/../app/views/footer.tpl.php';