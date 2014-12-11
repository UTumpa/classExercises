<?php
$array=array("First"=>"val1","SecoNd"=>"val2",
    "third"=>array("third-INner1"=>"val3.1"),
    "fourth"=>array("FouthINNer1"=>"val4.1","FourthINNER2"=>"val4.2"));
print_r($array);
$key=array_keys($array);
foreach($key as $ki)
{
    $klower=strtolower($ki);
    $val=$array[$ki];
    if(is_array($val))
    {
        foreach($val as $kinner=>$vinner)
        {

            $tl=strtolower($kinner);
            unset($val[$kinner]);
            $val[$tl]=$vinner;
        }
    }
    unset($array[$ki]);
    $array[$klower]=$val;
}
echo "<br> After Changing Key to-LowerCase : <br>";
print_r($array);

?>