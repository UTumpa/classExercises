<?php
$array1 = array(1,2,3,4,5,6,7,8,9,10,11,12);
$array2 = array(1,2,3,13);

$merged = array_merge($array1,$array2);

// output normal array_merge
echo '<pre>After array_merge :
';
print_r($merged);
echo '</pre>';

// do double flip for merging values in an array
$merged = array_flip($merged);
$merged = array_flip($merged);

// Output after
echo '<pre>After Double Flip :
';
print_r($merged);
echo '</pre>';
?>
