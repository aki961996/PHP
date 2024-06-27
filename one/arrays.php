<?php

// learning array in php
// datastruture
// traditional array
$colors1 = ['black', 'red', 'blue',];
//print_r($colors);

if (isset($colors1[3])) {
    echo $colors1[3];
} else {
    echo "not set";
}
echo "<br>";

//associative array
//key value pair
$footbal_team = [
    //key => value pair
    'messi' => 'barcelona',
    'cristino ronaldo' => 'realmadrid',
    'rooney' => "manchester united",
    'neymar' => "alhillal"

];

if (isset($footbal_team['messi'])) {
    echo $footbal_team['messi'];
} else {
    echo "not set";
}

//isset is the checking of the array inside of value 
