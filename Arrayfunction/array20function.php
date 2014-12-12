<?php
$flat_array = array(
    'one',
    'two',
    'three',
    'three',
    'four',
    'one'
);

$set = array_combine($flat_array, $flat_array);

var_dump($set);
?>