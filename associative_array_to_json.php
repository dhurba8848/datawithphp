<?php
/** 
 * Tutorial - convert Associative array to JSON
 */

$arr_data = array(
    "Name" => "John",
    "Address" => "Street 32",
    "Phone" => 32324234
);

$json_data = json_encode( $arr_data );
echo $json_data;