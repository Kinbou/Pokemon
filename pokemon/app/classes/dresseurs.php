<?php 

class Dresseur {
    public function carteDresseur() {
        global $pdo;
        // $query = $pdo->query("SELECT * FROM Dresseur");
        // return $query->fetchAll(PDO::FETCH_CLASS, 'Dresseur');

        return $pdo->query(
            "SELECT * FROM Dresseur"
        )->fetchAll(PDO::FETCH_CLASS, 'Dresseur');
    }

    public function ajoutDresseur($name) {
        global $pdo;

        $pdo->query("
        INSERT INTO Dresseur SET name = '". $name ."', age = 0, region = '', pokemon_id = 0
        ");
    }
}