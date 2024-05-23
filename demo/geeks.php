<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    // class Gfg
    // {
    //     var $message;

    //     // Constructor should be __construct
    //     function __construct($message)
    //     {
    //         $this->message = $message;

    //     }

    //     function msg()
    //     {
    //         return "This is an example of " . $this->message . "!";
    //     }
    // }


    // // instantiating an object
    // $newObj = new Gfg("Object Data Type");
    // echo $newObj->msg(); // This is correct

    // Creating an indexed array
    // $name_one = array("Zack", "Anthony", "Ram", "Salim", "Raghav");

    // // One way of Looping through an array using foreach
    // echo "Looping using foreach: \n";
    // foreach ($name_one as $val) {
    //     echo $val . "\n";
    // }
    // // count() function is used to count 
    // // the number of elements in an array
    // $round = count($name_one);


    // echo "\nThe number of elements are $round \n";

    // // Another way to loop through the array using for
    // echo "Looping using for: \n";
    // for ($n = 0; $n < $round; $n++) {
    //     echo $name_one[$n], "\n";
    // }

    //associtaive arrya
    // $name_one = [

    //     //key => value
    //     "Zack" => "Zara",
    //     "Anthony" => "Any",
    //     "Ram" => "Rani",
    //     "Salim" => "Sara",
    //     "Raghav" => "Ravina",
    // ];

    // Looping through an array using foreach
    // echo "Looping using foreach: \n";
    // foreach ($name_one as $val => $val_value) {
    //     echo "Husband is " . $val . " and Wife is " . $val_value . "\n";
    // }


    // Looping through an array using for
    // echo "\nLooping using for: \n";
    // $keys = array_keys($name_one);
    // $round = count($name_one);
    // $i = 0;
    // for ($i; $i < $round; ++$i) {
    //     echo $keys[$i] . " " . $name_one[$keys[$i]] . "\n";
    // }

    //     $age = array(
    //         // key => value

    //         "John" => 25,
    //         "Jane" => 30,
    //         "Alice" => 35,
    //         "Bob" => 40
    //     );
    //   foreach ($age as $val => $val_value) {
    //         echo " " . $val . "  " . $val_value . "\n";
    //     }

    // $keys = array_keys($age); //this is an array
    // // var_dump($keys[0]);
    // // die();
    // $round = count($keys);   //interger  value kiti

    // $i = 0;
    // for ($i; $i < $round; ++$i) {

    //     echo $keys[$i] . " " . $age[$keys[$i]] . "\n";
    // }

    //multidemntional array
    // $favorites = array(
    //     "Dave Punk" => array(
    //         //key => value
    //         "mob" => "5689741523",
    //         "email" => "davepunk@gmail.com",
    //     ),
    //     "Dave" => array(
    //         "mob" => "2584369721",
    //         "email" => "montysmith@gmail.com",
    //     ),
    //     "John Flinch" => array(
    //         "mob" => "9875147536",
    //         "email" => "johnflinch@gmail.com",
    //     )
    // );

    // // $a = count($favorites);

    // // var_dump($a);
    // // die();


    // // Using for and foreach in nested form
    // $keys = array_keys($favorites);


    // for ($i = 0; $i < count($favorites); $i++) {
    //    echo $keys[$i] . "\n";
    //     foreach ($favorites[$keys[$i]] as $key => $value) {

    //         echo $key . " : " . $value . "\n";
    //     }
    //     echo "\n";
    // }


    // $myarray = array(

    //     // Default key for each will 
    //     // start from 0 
    //     array("Ankit", "Ram", "Shyam"),
    //     array("Unnao", "Trichy", "Kanpur")
    // );

    // print_r($myarray);

    //multidimenstional arrya and associtive array

    // $marks = array(

    //     // Ankit will act as key 
    //     "Ankit" => array(

    //         // Subject and marks are  
    //         // the key value pair 
    //         "C" => 95,
    //         "DCO" => 85,
    //         "FOL" => 74,
    //     ),

    //     // Ram will act as key 
    //     "Ram" => array(

    //         // Subject and marks are  
    //         // the key value pair 
    //         "C" => 78,
    //         "DCO" => 98,
    //         "FOL" => 46,
    //     ),

    //     // Anoop will act as key 
    //     "Anoop" => array(

    //         // Subject and marks are 
    //         // the key value pair 
    //         "C" => 88,
    //         "DCO" => 46,
    //         "FOL" => 99,
    //     ),
    // );

    // // print_r($marks);
    // // die();

    // // Accessing the array element  
    // // using dimensions  

    // // It will display the marks of 
    // // Ankit in C subject 
    // // echo $marks['Ankit']['C'] . "\n";

    // // Accessing array elements using for each loop 
    // foreach ($marks as $mark) {

    //     echo $mark['C'] . " " . $mark['DCO'] . " " . $mark['FOL'] . "\n";
    // }

    //sorting
    // $numbers = array(40, 61, 2, 22, 13);
    // sort($numbers); //cheruthinn valuthilek
    // $arrlength = count($numbers);  // 5

    // for ($x = 0; $x < $arrlength; $x++) {
    //     echo $numbers[$x];
    //     echo "<br>";
    // }

    //rsort
    // $numbers = array(40, 61, 2, 22, 13);
    // rsort($numbers);  // valuthinnu cheruthilek
    // $arrlength = count($numbers);  // 5

    // for ($x = 0; $x < $arrlength; $x++) {
    //     echo $numbers[$x];
    //     echo "<br>";
    // }

    //asort
    // $age = array(
    //     //hey =>value
    //     "ayush" => "23",
    //     "shankar" => "47",
    //     "kailash" => "41"
    // );
    // // print_r($age);
    // // die();
    // asort($age);

    // foreach ($age as $x => $x_value) {
    //     echo "Key=" . $x . ", Value=" . $x_value;
    //     echo "<br>";
    // }


    //ksrort
    $age = array("ayush" => "23", "shankar" => "47", "kailash" => "41");
    ksort($age);

    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }

    //artithemetic opertors
    // $x = 50;  //int(50)
    // $y = 30; //int(30)
    // var_dump($y);
    // die();
    // if ($x == 50 and $y == 30) {
    //     echo "and Success 1 \n";   // 2um true avanam
    // }


    // if ($x == 50 or $y == 20) {
    //     echo "or Success 2 \n";   // or onnu true ayal mathi
    // }

    // if ($x == 50 xor $y == 20) {
    //     echo "xor Success 3 \n"; // or onnu true ayal mathi
    // }


    // if ($x == 50 && $y == 30) {
    //     echo "&& Success \n"; // 2um true avanam
    // }

    // if ($x == 50 || $y == 20) {
    //     echo "Success 5 \n"; // or onnu true ayal mathi
    // }





    // if ($x == 50 and $y == 30)
    //     echo "and Success 1 \n";

    // if ($x == 50 or $y == 20)
    //     echo "or Success \n";

    // if ($x == 50 xor $y == 20)
    //     echo "xor Success \n";

    // if ($x == 50 && $y == 30)
    //     echo "&& Success \n";

    // if ($x == 50 || $y == 20)
    //     echo "|| Success \n";

    // if (!$z)
    //     echo "! Success \n";



    ?>

</body>

</html>