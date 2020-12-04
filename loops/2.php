<p>Method while</p>
<?php
//while
$counter = 1;
while ($counter <= 120){
    echo $counter, " ";
    $counter ++;
}
?>
<p>Method for</p>
<?php
//for
echo "<br>";
for ($counter = 1; $counter <= 120; $counter ++){
    echo $counter, " ";
}
?>
<p>firstname</p>
<?php
$firstname = ['Jean', 'Mathieu', 'Théo', 'Dario'];
$counter = 0;
while ($counter < 4){
    echo $firstname[$counter], " ";
    $counter ++;
}
?>

<p>countries</p>
<select name="countries">
<option value="">Please choose an option</option>
<?php
$countries = array('Argentina', 'Australia', 'Austria', 'Belgium', 'Brazil', 'Canada', 'China', 'France', 'Italy', 'Spain');
$counter = 0;
while ($counter < 10){
    echo '<option value="">', $countries[$counter], "</option>";
    $counter ++;
}
?>
</select>
