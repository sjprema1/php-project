<?php
$array = [
    "foo" => "bar",
    "baz" => "qux",
    "dry" => "wet",
    "top" => "bottom",
];
$json_value = json_encode($array);

print($json_value);

$new_array = json_decode($json_value);
print_r($new_array);
foreach($new_array as $key=>$value){
    echo($value);
}


?>