<?php
if (isset($_GET['age'], $_GET['genre'], $_GET['anglais'])){
    $age = $_GET['age'];
    $genre = $_GET['genre'];
    $anglais = $_GET['anglais'];
    if ($age < 12){
        echo ($anglais . ' ' . $genre .' kiddo!<br>');
    }   else if($age >= 12 and $age < 18){
        echo ($anglais . ' ' . $genre . ' Teenager!<br>');
    }   else if($age >= 18 and $age < 115){
        echo ($anglais . ' ' . $genre . ' Adult!<br>');
    }   else if($age >= 115){
        echo ($anglais . ' Wow ' . $genre .' ! Toujours vivant? Êtes-vous un robot, comme moi? Puis-je vous serrer dans mes bras?<br>');
    }   
}

// Form
?>
<br>
<form method="get" action="">
	<label for="age"></label>
    Quel âge avez-vous?<br>
	<input type="" name="age"><br>
    <input type="radio" name="genre" value="monsieur">Homme
    <input type="radio" name="genre" value="madamme">Femme<br>
    Parlez-vous anglais?<br>
    <input type="radio" name="anglais" value="Hello">Oui
    <input type="radio" name="anglais" value="Aloha">Non<br>
    <input type="submit" name="submit" value="Envoyer">
</form>