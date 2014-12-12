<?php $a = array(1,2,3,4,5,6,7,8); ?>

    goal (say, for 3 columns):

<?php
array(
    array(1,2,3),
    array(4,5,6),
    array(7,8)
);
?>

<?php
function get_array_columns($array, $columns){

    $columns_map = array();
    for($i=0; $i<$columns; $i++){ $columns_map[] = 0; }//init columns

    //create map
    $count = count($array);
    $position = 0;
    while($count > 0){
        $columns_map[$position]++;
        $position = ($position < $columns-1) ? ++$position : 0;
        $count--;
    }

    //chunk the array based on map
    $chunked = array();
    foreach($columns_map as $map){
        $chunked[] = array_splice($array,0,$map);
    }

    return $chunked;
}//end get_array_columns
?>