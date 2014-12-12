<?php
function get_longest_value($array) {
    // Some don't like to initialize, I do
    $longest = NULL;
    $longestLen = -1;
    foreach ($array $value) {
        $len = strlen($value);
        if($len>$longestLen) {
            $longest = $value;
            $longestLen = $len;
        }
    }
    $longest = str_replace("\r\n", "\n", $longest);
    if (get_magic_quotes_gpc()) { return stripslashes($longest); }
    return $longest;
}
?>