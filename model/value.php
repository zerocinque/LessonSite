<?php 

$name = array('marco', 'mario', 'rosa', 'francesca', 'maria', 'luigi', 'pippo', 'dario', 'fabio', 'davide', 'anna');
$surname = array('rossi', 'bottasso', 'colangelo', 'ghislandi', 'tonoli', 'arnolfo', 'sacchetto', 'antonino', 'panzanaro');
$subject = array('math', 'geography', 'php programming', 'history', 'design patter');


function rand_date($min_date, $max_date) {
    
    $min_epoch = strtotime($min_date);
    $max_epoch = strtotime($max_date);

    $rand_epoch = rand($min_epoch, $max_epoch);

    return date('Y-m-d H:i:s', $rand_epoch);
}


