<?php

$values = range(1, 31);
$rows = array_chunk($values, 7);

print "<table>\n";
foreach ($rows as $row) {
    print "<tr>\n";
    foreach ($row as $value) {
        print "<td>" . $value . "</td>\n";
    }
    print "</tr>\n";
}
print "</table>\n";

?>
