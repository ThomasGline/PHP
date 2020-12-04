<?php
if(isset($_GET['note'])){
    $note = $_GET['note'];
    if($note <= 4){
        echo('<p>Ce travail est vraiment mauvais. Quel gamin stupide!</p>');
    }   else if($note > 4 and $note <= 9){
        echo('Ce n est pas suffisant. Il faut étudier davantage.');
    }   else if($note == 10){
        echo('à peine assez!');
    }   else if($note > 10 and $note <= 14){
        echo('Pas mal!');
    }   else if($note > 14 and $note <= 18){
        echo('Bravo, bravissimo!');
    }   else if($note > 18 and $note <= 20){
        echo('Trop beau pour être vrai: affrontez le tricheur!');
    }
}
?>
<form method="get" action="">
Note : 
<input type="" name="note">
<input type="submit" name="submit" value="Envoyer">
</form>