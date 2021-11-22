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
    }

    public function dateUpdate(){
        $pdo = new PDO('sqlite:' . __DIR__ . '/../sqlite/database.db' );
        $pdo->exec("UPDATE users SET updated=date('now')");
    }
}
?>