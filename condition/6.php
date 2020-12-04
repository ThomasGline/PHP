<?php

if (isset($_GET['age'], $_GET['genre'], $_GET['nom'])){
    $age = $_GET['age'];
    $genre = $_GET['genre'];
    $nom = $_GET['nom'];
    if($genre == 'femme'){
        if($age > 20 and $age <= 40){
            echo('Bienvenue dans l équipe!');
        }   else{
            echo('Désolé, vous ne répondez pas aux critères');
        }
    }   else{
        echo('Désolé, vous ne répondez pas aux critères');
    }
}
?>
<p>Girl Soccer</p>
<form method="get" action="">
Quel âge avez-vous?<br>
<input type="" name="age"><br>
<input type="radio" name="genre" value="homme">Homme
<input type="radio" name="genre" value="femme">Femme<br>
Quel est votre nom?<br>
<input type="" name="nom"><br>
<input type="submit" name="submit" value="Envoyer">
</form>