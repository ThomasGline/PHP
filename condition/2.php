<?php
// setlocale(LC_TIME, 'fr_FR.UTF8');
// setlocale(LC_TIME, 'fr_FR');
// setlocale(LC_TIME, 'fr');
setlocale(LC_TIME, 'be_be');
$hour = strftime('%H:%M:%S');



if($hour > '5:00:00' and $hour <= '9:00:00'){
    echo ('Bonjour!');
}   else if ($hour > '9:00:00' and $hour <= '12:00:00') {
    echo ('Good day!');
}   else if ($hour > '12:00:00' and $hour <= '16:00:00') {
    echo ('Bonjour!');
}   else if ($hour > '16:00:00' and $hour <= '21:00:00') {
    echo ('Bonsoir!');
}   else {
    echo ('Bonne nuit!');
}   

?>