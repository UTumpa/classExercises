<?php

$okay = array(0, 10, 20, 30);
$not_okay = array(0, 0.5, 1, 1.5);

$foo = array_combine($okay, $okay);
$bar = array_combine($not_okay, $not_okay);

/*

Results:

$foo = {
  [0]=> int(0)
  [10]=> int(10)
  [20]=> int(20)
  [30]=> int(30)
}

$bar = {
  [0]=> float(0.5)
  [1]=> float(1.5)
}

*/

?>