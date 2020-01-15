<?php
// Le fait d'instancier PDO établit, en arrière plan, une connection à la BDD.
$pdo = new PDO(
  // à quoi on se connecte ? (data source name => DSN)
  'mysql:dbname=Pokemon;host=localhost;charset=UTF8',
  // nom d'utilisateur
  'root',
  // mot de passe
  'Ereul9Aeng',
  // options de connection et de fonctionnement de PDO
  array(
    // affichage explicite des erreurs SQL dans la page générée par PHP
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
  )
);