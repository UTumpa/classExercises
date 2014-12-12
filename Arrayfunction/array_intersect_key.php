<?PHP
$default = array(
    "one" => 1,
    "two" => 2
);
$untrusted = array(
    "one" => 42,
    "three" => 3
);
var_dump(array_merge_default($default, $untrusted));

array(2) {
    ["two"]=>
  int(2)
  ["one"]=>
  int(42)
}

?>