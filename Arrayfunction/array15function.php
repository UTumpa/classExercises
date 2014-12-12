
<?php
// If they are not of same size, here is solution:

$abbreviations = array("AL", "AK", "AZ", "AR", "TX", "CA");
$states = array("Alabama", "Alaska", "Arizona", "Arkansas");
function combine_arr($a, $b)
{
    $acount = count($a);
    $bcount = count($b);
    $size = ($acount > $bcount) ? $bcount : $acount;
    $a = array_slice($a, 0, $size);
    $b = array_slice($b, 0, $size);
    return array_combine($a, $b);
}
$combined = combine_arr($abbreviations, $states);
print_r($combined);

//  Output
//  Array ( [AL] => Alabama [AK] => Alaska [AZ] => Arizona
//  [AR] => Arkansas )
?>
