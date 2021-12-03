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

    public function fetchPerson(string $username, string $password) {
        $pdo = new PDO('sqlite:' . __DIR__ . '/../sqlite/database.db' );
        $sth = $pdo->prepare("SELECT * FROM users WHERE email= :email");
        $sth->execute([
            'email' => $username
        ]);
        $result = $sth->fetch();
        if ($result == false){
            return false;
        }
        if (password_verify($password, $result['password'])){
            return true;
        }
        return false;
    }

    public function getNom(string $username){
        $pdo = new PDO('sqlite:' . __DIR__ . '/../sqlite/database.db' );
        $sth = $pdo->prepare("SELECT * FROM users WHERE email= :email");
        $sth->execute([
            'email' => $username
        ]);
        $result = $sth->fetch();
        if ($result == false){
            return null;
        }
        else {
            return $result['lastname'];
        }
    }

    public function getPrenom(string $username){
        $pdo = new PDO('sqlite:' . __DIR__ . '/../sqlite/database.db' );
        $sth = $pdo->prepare("SELECT * FROM users WHERE email= :email");
        $sth->execute([
            'email' => $username
        ]);
        $result = $sth->fetch();
        if ($result == false){
            return null;
        }
        else {
            return $result['name'];
        }
    }

    public function createAccount(string $email, string $name, string $lastname, string $password, string $password2, string $town, string $postal, string $adress){
        $pdo = new PDO('sqlite:' . __DIR__ . '/../sqlite/database.db' );
        $sth = $pdo->prepare("SELECT * FROM users WHERE email= :email");
        $sth->execute([
            'email' => $email
        ]);
        $result = $sth->fetch();
        if ($result == false){
            if ($password == $password2){
                $sth = $pdo->prepare('INSERT INTO users (email, name, lastname, password, town, postal, address, active, updated) VALUES (:email, :name, :lastname, :password, :town, :postal, :address, 1, Date())');
                $sth->execute([
                    'email' => $email,
                    'name' => $name,
                    'lastname' => $lastname,
                    'password' => password_hash($password, PASSWORD_DEFAULT),
                    'town' => $town,
                    'postal' => $postal,
                    'address' => $adress
                ]); 
                return 0;
            }
            return 1;
        }
        return 2;
    }

    public function addMessage(string $topic, string $emailContact, string $tel, string $name, string $lastname, string $message){
        $pdo = new PDO('sqlite:' . __DIR__ . '/../sqlite/database.db' );
        $sth = $pdo->prepare("SELECT * FROM users WHERE email = :email");
        $sth->execute([
            'email' => $emailContact
        ]);
        $result = $sth->fetch();
        if($result){
            $sth = $pdo->prepare('INSERT INTO messages (name, lastname, tel, emailContact, topic, message) VALUES (:name, :lastname, :tel, :emailContact, :topic, :message)');
            $sth->execute([
                'name' => $name,
                'lastname' => $lastname,
                'tel' => $tel,
                'emailContact' => $emailContact,
                'topic' => $topic,
                'message' => $message
            ]);
            return true;
        }
        return false;
    }

    public function addArticle(string $titre, string $description, string $contenu, string $imagePath, string $shortTitle){
        $pdo = new PDO('sqlite:' . __DIR__ . '/../sqlite/database.db');
        $sth = $pdo->prepare("INSERT INTO articles (titre, description, contenu, imagePath, shortTitle) VALUES (:titre, :description, :contenu, :imagePath, :shortTitle)");
        $sth->execute(['titre'=>$titre, 'description'=>$description, 'contenu'=>$contenu, 'imagePath'=>$imagePath, 'shortTitle'=>$shortTitle]);
    }

    public function getTitreArticle(int $index){
        $pdo = new PDO('sqlite:' . __DIR__ . '/../sqlite/database.db' );
        $sth = $pdo->prepare("SELECT titre FROM articles WHERE id = :index");
        $sth->execute(["index" => $index]);
        $result = $sth->fetch();
        return $result['titre'];
    }

    public function getDescriptionArticle(int $index){
        $pdo = new PDO('sqlite:' . __DIR__ . '/../sqlite/database.db' );
        $sth = $pdo->prepare("SELECT description FROM articles WHERE id = :index");
        $sth->execute(["index" => $index]);
        $result = $sth->fetch();
        return $result['description'];
    }

    public function getContenuArticle(int $index){
        $pdo = new PDO('sqlite:' . __DIR__ . '/../sqlite/database.db' );
        $sth = $pdo->prepare("SELECT contenu FROM articles WHERE id = :index");
        $sth->execute(["index" => $index]);
        $result = $sth->fetch();
        return $result['contenu'];
    }

    public function getImageArticle(int $index){
        $pdo = new PDO('sqlite:' . __DIR__ . '/../sqlite/database.db' );
        $sth = $pdo->prepare("SELECT imagePath FROM articles WHERE id = :index");
        $sth->execute(["index" => $index]);
        $result = $sth->fetch();
        return $result['imagePath'];
    }

    public function getShortTitleArticle(int $index){
        $pdo = new PDO('sqlite:' . __DIR__ . '/../sqlite/database.db' );
        $sth = $pdo->prepare("SELECT shortTitle FROM articles WHERE id = :index");
        $sth->execute(["index" => $index]);
        $result = $sth->fetch();
        return $result['shortTitle'];
    }

    public function getLastsArticles(bool $nbArticles){
        $pdo = new PDO('sqlite:' . __DIR__ . '/../sqlite/database.db' );
        if($nbArticles){
            return $pdo->query("SELECT * FROM articles ORDER BY id DESC LIMIT 5");
        }
        $sth = $pdo->prepare("SELECT * FROM articles ORDER BY id DESC LIMIT 1");
        return $sth->fetch();
    }

    public function hashPasswords(){
        $pdo = new PDO('sqlite:' . __DIR__ . '/../sqlite/database.db' );
        $sth = $pdo->prepare("SELECT * FROM users");
        $sth->execute();
        $result = $sth->fetchAll();
        foreach($result as $item){
            $sth = $pdo->prepare("UPDATE users SET password= :password WHERE email= :email");
            $sth->execute([
                'password' => password_hash($item['password'], PASSWORD_DEFAULT),
                'email' => $item['email']
            ]);
        }
    }
}
