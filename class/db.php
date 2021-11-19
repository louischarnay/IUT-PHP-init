<?php
class db {
    public function connection(){
        try {
            $pdo = new PDO('sqlite:' . __DIR__ . '/../sqlite/database.db' );
            $statement = $pdo->query ("SELECT 'consectetuer@nislQuisquefringilla.com' AS _message FROM users");
            $row = $statement->fetch(PDO::FETCH_ASSOC );
        } 
        catch (PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
        }
            echo 'Connexion à la base réussie';
    }
}
?>