<?php
function array_combine2($arr1, $arr2) {
    $count1 = count($arr1);
    $count2 = count($arr2);
    $numofloops = $count2/$count1;

    $i = 0;
    while($i < $numofloops){
        $arr3 = array_slice($arr2, $count1*$i, $count1);
        $arr4[] = array_combine($arr1,$arr3);
        $i++;
    }

    return $arr4;
}
?>