<?php

//This is the conditions in php

$first_name = 'Akhilesh';
$last_name = 'V';

if ($first_name == 'akhilesh' || $last_name == 'f') {
    echo "The first condition is true";
} elseif ($first_name != 'Akhilesh' && $last_name == 'V') {
    echo "The second condition is true";
} else {
    echo "The condition are false";
}
