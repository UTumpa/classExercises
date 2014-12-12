<?php
$ar = array('J. Karjalainen', 'J. Karjalainen', 60, '60', 'J. Karjalainen', 'j. karjalainen', 'Fastway', 'FASTWAY', 'Fastway', 'fastway', 'YUP');

$ar = array_count_values(array_map('strtolower', $ar));
?>