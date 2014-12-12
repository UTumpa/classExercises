<?php
function array_real_combine($a, $b)
{
    return $a===array() && $b===array() ? array() : array_combine($a, $b);
}
?>