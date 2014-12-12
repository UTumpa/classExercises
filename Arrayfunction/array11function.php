
<?php
// Using the $records array from Example #1
$last_names = array_column($records, 'last_name', 'id');
print_r($last_names);
?>
