<?php

function arrKey2Lower(&$arrVals) {
    foreach( $arrVals as $key => $item ) {
        $key2 = strtolower($key);
        if ( $key2 != $key) {
            unset($arrVals[$key]);
            $arrVals[$key2]=$item;
            $key=$key2;
        }

        if ( is_array($item) ) { arrKey2Lower($arrValores[$key]); }
    }
}

$arr = array('ID' => 1, 'NAME'=> 'Luis', 'Contact' => array('PHONE' => '3010-7148', 'E-MAIL' => 'luis@net.com') );
arrKey2Lower($arr);
var_dump($arr);


?>
