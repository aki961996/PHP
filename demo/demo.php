<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <?php

    // $first_name = "Akhilesh"; //firstname is the variable and Akhilesh is string datatype
    // var_dump($first_name);

    // $age = 5985;  //integer
    // var_dump($age);

    // $decimal_point = 10.365;  //float
    // var_dump($decimal_point);

    // $age = 25;
    // $is_adult = ($age >= 18);

    // if ($is_adult == true) {     //bool
    //     echo 'hello';
    // }
    // $num1 = 10;
    // $num2 = 10;
    // $is_equal = ($num1 == $num2);   // false
    // if ($is_equal == true) {
    //     echo $num1 + $num2;
    // }



    // $cars = array("Volvo", "BMW", "Toyota");
    // var_dump($cars);



    //object

    // class Car
    // {
    //     public $color;
    //     public $model;
    //     public function __construct($color, $model)
    //     {
    //         $this->color = $color;
    //         $this->model = $model;
    //     }
    //     public function message()
    //     {
    //         return "My car is a " . $this->color . " " . $this->model . "!";
    //     }
    // }

    // $myCar = new Car("black", "Volvo");
    // echo $myCar->message();
    // echo "<br>";
    // $myCar = new Car("red", "Toyota");
    // echo $myCar->message();


    class Student
    {


        public $name;
        public $age;
        public function __construct($name, $age)
        {
            $this->name = $name;
            $this->age = $age;
        }
        public function getDataName()
        {
            return "My name is a " . $this->name;
        }
        public function getDataAge()
        {
            return "My age is " . $this->age;
        }
    }

    $student = new Student("aki", 25);
    var_dump($student);
    echo $student->getDataName();
    echo $student->getDataAge();
    // $person = array("firstname" => "John", "last_name" => "Doe", "age" => 30);
    // //print_r($person);

    // foreach ($person as $key => $value) {
    //     echo $key . ": " . $value . "\n";
    // }

    ?>
</body>

</html>