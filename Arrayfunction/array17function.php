<?php

function array_combine($arr1,$arr2) {
    $out = array();
    foreach($arr1 as $key1 => $value1)    {
        $out[$value1] = $arr2[$key1];
    }
    return $out
}

?>