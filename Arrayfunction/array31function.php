<?php

function identical_values( $arrayA , $arrayB ) {

    sort( $arrayA );
    sort( $arrayB );

    return $arrayA == $arrayB;
}

// Examples:

$array1 = array( "red" , "green" , "blue" );
$array2 = array( "green" , "red" , "blue" );
$array3 = array( "red" , "green" , "blue" , "yellow" );
$array4 = array( "red" , "yellow" , "blue" );
$array5 = array( "x" => "red" , "y" =>  "green" , "z" => "blue" );

identical_values( $array1 , $array2 );  // true
identical_values( $array1 , $array3 );  // false
identical_values( $array1 , $array4 );  // false
identical_values( $array1 , $array5 );  // true

?> 