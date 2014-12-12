<?php
function array_key_diff($ar1, $ar2) {  // , $ar3, $ar4, ...
    // returns copy of array $ar1 with those entries removed
    // whose keys appear as keys in any of the other function args
    $aSubtrahends = array_slice(func_get_args(),1);
    foreach ($ar1 as $key => $val)
        foreach ($aSubtrahends as $aSubtrahend)
            if (array_key_exists($key, $aSubtrahend))
                unset ($ar1[$key]);
    return $ar1;
}

$a = array("c" => "catty", "b" => "batty", "a" => "aunty", 5 => 4, 2.9 => 7, 11, "n" => "nutty");
$b = array(9, "d" => "ditty", "b" => "bratty", "a" => null, 10, 13);
$c = array_key_diff ($a, $b, array(5 => 6));
?>
