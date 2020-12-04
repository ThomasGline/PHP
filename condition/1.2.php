<?php
// 1.2 Clean your room Exercise, improved

// Create the array of possible states
$possible_states = array (
    0 => 'health hazard',
    1 => 'filthy',
    2 => 'dirty',
    3 => 'clean',
    4 => 'immaculate',
);

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[0]; 

if( $room_filthiness == 'health hazard' ){
	echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if($room_filthiness == 'filthy' and $room_filthiness == 'dirty' ){
	echo "Yuk, Room is dirty : let's clean it up !";
// ...
} else {
	echo "<br>Nothing to do, room is neat.";
}
?>