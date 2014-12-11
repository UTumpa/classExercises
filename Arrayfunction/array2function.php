<?php

// improving the previous script
function ack_r3(&$array, $case=CASE_LOWER, $flag_rec=false)
{
    $array = array_change_key_case($array, $case);
    if ( $flag_rec ) {
        foreach ($array as $key => $value) {
            if ( is_array($value) ) {
                ack_r3($array[$key], $case, true);
            }
        }
    }
}

// same of array_change_key_case
$arr = array('ID' => 1, 'NAME'=> 'Luis', 'Contact' => array('PHONE' => '3010-7148', 'E-MAIL' => 'luis@net.com') );
ack_r3($arr, CASE_LOWER,false);
var_dump($arr);

$arr = array('ID' => 1, 'NAME'=> 'Luis', 'Contact' => array('PHONE' => '3010-7148', 'E-MAIL' => 'luis@net.com') );
ack_r3($arr, CASE_LOWER,true);
var_dump($arr);

?>
