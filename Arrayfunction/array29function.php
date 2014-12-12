<?php
$array1 = array("a","b","c","a","a");
$array2 = array("a");

$diff = array_diff($array1,$array2);

// yields: array("b","c") the duplicate "a" values are removed
?>