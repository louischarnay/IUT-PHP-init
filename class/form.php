<?php
class form {
    private $methods;

    public function setList($args){
        $this->methods = $args;
    }

    public function input(){
        foreach($this->methods as $item)    
            switch($item){
                case "email":
                    ?><input type="email" name="email" id="email" required="required">
                    <label for="email" id="labelEmail2">Email</label><?php
                    break;
                case "password":
                    ?><input type="password" name="mdp" id="mdp" required="required">
                    <label for="mdp" id="labelMdp">Mot de passe</label>
                    <input type="password" name="mdp2" id="mdp2" required="required">
                    <label for="mdp2" id="labelMdp2">Réécrivez votre mot de passe</label><?php
                    break;
                case "nom":
                    ?><input type="text" name="nom" id="nom" required="required">
                    <label for="nom" id="labelNom2">Nom</label><?php
                    break;
                case "prenom":
                    ?><input type="text" name="prenom" id="prenom" required="required">
                    <label for="prenom" id="labelPrenom2">Prénom</label><?php
                    break;
                case "date_naissance":
                    ?><input type="date" name="date_naissance" id="date_naissance" required="required">
                    <label for="date_naissance" id="labelNaissance">Date de naissance</label><?php
                    break;
                case "adresse":
                    ?><input type="text" name="adresse" id="adresse" required="required">
                    <label for="adresse" id="labelAdresse">Adresse</label><?php
                    break;
                case "code_postal":
                    ?><input type="text" name="code_postal" id="code_postal" pattern="[0-9]{5}" required="required">
                    <label for="code_postal" id="labelCodePostal">Code postal</label><?php
                    break;
                case "ville":
                    ?><input type="text" name="ville" id="ville" required="required">
                    <label for="ville" id="labelVille">Ville</label><?php
                    break;
                case "sexe":
                    ?><p class="pLabel">Sexe</p>
                    <div id="radio">
                        <input type="radio" name="sexe" id="homme" class="inputSexe" value="Homme">
                        <label for="homme" id="labelhomme" class="labelSexe">Homme</label>
                        <input type="radio" name="sexe" id="nonrenseigne" class="inputSexe" value="Non renseigné">
                        <label for="nonrenseigne" id="labelnonrenseigne" class="labelSexe">Non renseigné</label>
                        <input type="radio" name="sexe" id="femme" class="inputSexe" value="Femme">
                        <label for="femme" id="labelfemme" class="labelSexe">Femme</label>
                    </div><?php
                    break;
                case "photo":
                    ?><p id="titrePhoto" class="pLabel">Avatar</p>
                    <label for="photo" id="labelphoto">Choisir une photo</label>
                    <input type="file" name="photo" id="photo" accept="image/png"><?php
                    break;
                case "centre_interets":
                    ?><p class="pLabel">Centres d'intérêts</p>
                    <div id="divLoisirs">
                        <input type="checkbox" name="loisirs[]" id="sport" value="Sport" class="checkBox">
                        <label id="labelSport" for="sport" class="labelLoisir">Sport</label>
                        <input type="checkbox" name="loisirs[]" id="jeux" value="Jeux" class="checkBox">
                        <label id="labelJeux" for="jeux" class="labelLoisir">Jeux</label>
                        <input type="checkbox" name="loisirs[]" id="musique" value="Musique" class="checkBox">
                        <label id="labelMusique" for="musique" class="labelLoisir">Musique</label>
                        <input type="checkbox" name="loisirs[]" id="lecture" value="Lecture" class="checkBox">
                        <label id="labelLexture" for="lecture" class="labelLoisir">Lecture</label>
                        <input type="checkbox" name="loisirs[]" id="dessin" value="Dessin" class="checkBox">
                        <label id="labelDessin" for="dessin" class="labelLoisir">Dessin</label>
                        <input type="checkbox" name="loisirs[]" id="cinema" value="Cinema" class="checkBox">
                        <label id="labelCinema" for="cinema" class="labelLoisir">Cinéma</label>
                    </div><?php
                    break;
                case "couleur":
                    ?><label id="labelCouleur" for="couleur">Couleur préférée</label>
                    <input type="color" name="couleur" id="couleur"><?php
                    break;
                case "sujet":
                    ?><input class="inputContact" type="text" name="sujet" id="sujet" required="required">
                    <label class="labelContact" id="labelSujet" for="sujet">Sujet</label><?php
                    break;
                case "tel":
                    ?><input class="inputContact" type="tel" name="tel" id="tel" required="required">
                    <label class="labelContact" id="labelTel" for="tel">Téléphone</label><?php
                    break;
                case "message":
                    ?><textarea name="message" id="message" rows="10" cols="50" maxlength="300" required="required"></textarea>
                    <label class="labelContact" id="labelMessage" for="message">Votre message</label><?php
                    break;
                case "login":
                    ?><input type="text" name="username" id="usernameEnregistrer" required="required" value=<?php echo $_COOKIE["usernameEnregistre"]??"" ?>>
                    <label for="usernameEnregistrer" id="labelEmail2">Login</label>
                    <input type="password" name="mdp" id="mdpEnregeistrer" required="required" value=<?php echo $_COOKIE["mdpEnregistre"]??""?>>
                    <label for="mdpEnregeistrer" id="labelMdp">Mot de passe</label>
                    <div id="divMessageIncorrect">
                        <p id="messageIncorrect">
                            <?php if(isset($_SESSION["mdpIncorrect"]) == true) {
                                echo "Adresse email ou mot de passe incorrect";
                            }?>
                        </p>
                    </div>
                    <input type="checkbox" name="enregistrer" id="enregistrer" value="Enregistrer" class="checkBox">
                    <label id="labelEnregistrer" for="enregistrer" class="labelLoisir">S'enregistrer</label><?php
                    break;
            }
    }
}
?>