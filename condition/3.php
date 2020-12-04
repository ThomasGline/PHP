<?php
// 3. "Different greetings according to age" Exercise

if (isset($_GET['age'])){
    $age = $_GET['age'];
    if ($age < 12){
        echo ('Hello kiddo!');
    }   else if($age >= 12 and $age < 18){
        echo ('Hello Teenager!');
    }   else if($age >= 18 and $age < 115){
        echo ('Hello Adult!');
    }   else if($age >= 115){
        echo ('Wow! Toujours vivant? Êtes-vous un robot, comme moi? Puis-je vous serrer dans mes bras?');
    }   
}   else{
    $age = '';
}

// Form (incomplete)
?>
<form method="get" action="">
	<label for="age">...</label>
	<input type="" name="age">
	<input type="submit" name="submit" value="Greet me now">
</form>