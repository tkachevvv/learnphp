<?php
$i = 4;
if($i > 4){
    var_dump('bigger');
} elseif ($i == 10){
    var_dump('equals');
} else {
    var_dump('smaller');
}

$day = (int) data('w', strtotime('8.09.2025'));

var_dump($day);

if($day == 1) {
    var_dump('Esmaspaev') 
} else if($day == 2) {
    
}