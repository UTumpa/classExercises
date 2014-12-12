<?php
function array_chunk_fixed($input, $num, $preserve_keys = FALSE) {
    $count = count($input) ;
    if($count)
        $input = array_chunk($input, ceil($count/$num), $preserve_keys) ;
    $input = array_pad($input, $num, array()) ;
    return $input ;
}

$array = array(1, 2, 3, 4, 5) ;
print_r(array_chunk($array, 2)) ;
print_r(array_chunk_fixed($array, 2)) ;
?>