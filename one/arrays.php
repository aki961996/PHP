<?php

//learning array in php
//datastruture
//traditional array
// $colors1 = ['black', 'red', 'blue',];
// //print_r($colors);
// //isset paranja array set ayitun undo enn array yil value undegil true or false
// if (isset($colors1[3])) {
//     echo $colors1[3];
// } else {
//     echo "not set";
// }
// echo "<br>";

//associative array
//key value pair
$footbal_team = [
    //key => value pair
    'messi' => 'barcelona',
    'cristino ronaldo' => 'realmadrid',
    'rooney' => "manchester united",
    'neymar' => "alhillal"

];
// print_r($footbal_team['messi']);
if (isset($footbal_team['messi'])) {
    echo $footbal_team['messi'];
} else {
    echo "not set";
}

//isset use cheyanth epo $footbal_team messi ennu parayana oru key set ano enn nokan undel true ellel else adikum
//isset is the checking of the array inside of value 
