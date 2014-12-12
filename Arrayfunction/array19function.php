<?php
function safeArrayCombine($keys, $values) {
    $combinedArray = array();

    for ($i=0, $keyCount = count($keys); $i < $keyCount; $i++) {
        $combinedArray[$keys[$i]] = $values[$i];
    }

    return $combinedArray;
}
?>