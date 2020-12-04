<?php
$family = ['Maman', 'Papa', 'Popo', 'Toto'];
print_r($family);
echo "<br>";

$recipes = ['Hamburger', 'Pizza', 'Tacos', 'Steak'];
print_r($recipes);
echo "<br>";

$films = ['Star-Wars', 'Avengers', 'Warcraft', 'Okay'];
print_r($films[2]);
echo "<br>";

var_dump($films);

$me = array ('firstname' => 'Gline', 'secondname' => 'Thomas', 'age' => 20, 'favorite season' => 'spring', 'likes soccer?' => true, 'hobbies' => array ('soccer', 'hardware', 'programming'),);
var_dump($me);
echo "<br>";
echo count($me); 
?>