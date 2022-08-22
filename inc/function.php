<?php

function filter_form($post){
    return is_array($post) ? array_map('filter_form', $post) :  htmlspecialchars(trim($post));
}


function dateNorm($date){

    $date2 = explode(" ", $date);
    $date3 = $date2[0];
    $date4 = explode("-", $date3);
    $date5 = $date4[2] . '.' . $date4[1] . '.' . $date4[0];
    return $date5;
}

/*function test($tt) {
    echo $tt;
}*/

?>