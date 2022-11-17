<!-- Class -->

<!--PHP- built-in classes -->
<?php
    // $classes = get_declared_classes(); // get_declared_classes() is call PHP built-in functions

    // First way to output this all buit-in classes
    // foreach($classes as $pclass){
    //     echo $pclass . "<br>";
    // }

    // or
    // Second way to output this all buit-in classes
    //echo "All class name : <br>" . implode("<br>", $classes);

?>


<!-- Class -->
<?php
    // class GreenHacker {
    //     function student(){
    //         echo "Green Hacker Student method";
    //     }
    //     function teacher(){
    //         echo "Green Hacker teacher method";
    //     }
    //     function founder(){
    //         echo "Green Hacker Founder method";
    //     }
    // }

    // if(class_exists('GreenHacker')){ // class_exits('') function is check this class have been existed
    //     echo "GreenHacker Class is exist";
    // }else{
    //     echo "this class is not exitst";
    // }


    // $methods = get_class_methods('GreenHacker'); // get_class_methods('') is call having all methods in this class

    // foreach($methods as $funMet){
    //     echo $funMet . "<br>";
    // }


    // method_exists('className','methodName') is check this method is having or not in this class
    // if(method_exists('GreenHacker','teacher')){ 
    //     echo "yes, teacher method is having in GreenHacker Class";
    // }else{
    //     echo "No, this method is not having in GreenHacker Class";
    // }

    // create instance object and call this method in this class
    // $first = new GreenHacker(); // create instance object from class GreenHacker()
    //echo get_class($first); // output is --> GreenHacker // beacause $first variable is declare from GreenHacer class so output is called class name
    // $first -> founder(); // call founder() method 

    // $second = new GreenHacker();
    // $second -> teacher(); // call teacher() method to read
?>


<!-- class property and print property -->
<?php
    // class GreenHackers {
    //     var $student = "Green Hacker online students"; // create property $student

    //     var $subjects = "Web Design and Web Developments"; // create property $subject
    // }

    // $res = new GreenHackers();

    // echo $res -> student; // no need $ (Dolla Sign) to call property

    // echo "<br>";

    // echo $res -> subjects;


    class Car { // create Car class
        var $wheel = 4; // create $wheel property
        var $door = 6; // create $door property
        var $sofa = 2; // create $sofa property
        var $firstName;
        var $lastName;

        function fullName(){
            return $this -> firstName . " " . $this -> lastName;
        }

        function car_drive(){
            echo "Wheel = ";
            // property read
            //echo $this -> wheel; // $this is recall Car class and then, wheel property
            
            // property write
            echo $this -> wheel = 6; // it accept new value assign to wheel property
            echo "<br>";

            echo "Door = ";
            echo $this -> door; // $this is recall Car class and then, door property
            echo "<br>";

            echo "Sofa = ";
            echo $this -> sofa; // $this is recall Car class and then, sofa property
            echo "<br>";

            echo "This car is good";
        }
    }

    // get variabel/properties of class // use get_class_vars('className') method
    print_r(get_class_vars('Car')); // output is properties of Car class

    // get method of class // user get_class_methods('className') 
    print_r(get_class_methods('Car'));

    // get object variable of class // use get_object_vars method// can output change value of property
    $first -> wheel = 10;
    print_r($first); // output is properties of Car class and change value of properties

    // property_exists('className','propertyName') method is return boolean value true/false
    if(property_exists('Car','wheel')){
        echo "Yes, wheel property exist in Car class.";
    }else{
        echo "No, wheel property does not exist in Car class.";
    }

    $car1 = new Car();
    $car1 -> fistName = "Ko Ko";
    $car1 -> lastName = "Mg";
    //echo $car1 -> firstName . " " . $car1 -> lastName; // Ko Ko Mg
    // or
    echo $car1 -> fullName(); // Ko Ko Mg


    $bmw = new Car(); // create instance class

    $bmw -> car_drive();
?>