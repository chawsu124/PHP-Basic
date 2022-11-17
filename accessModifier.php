<!-- Access Modifier --> 
<!-- or -->
<!-- Visibility Modifier -->

<!-- public / private / protected -->
<?php
    class Car { // create Car class
        public $wheel = 4; // public property can be called at anywhere
        private $door = 6; // private property can be called only in this class method
        protected $sofa = 2; // protected property can be called other class which inheritance from this class

        function car_drive(){
           
            echo $this -> wheel; // public property can be called at anywhere
            echo "<br>";

            echo $this -> door; // private property can be called only in this class method 
            echo "<br>";

            echo $this -> sofa; // protected property can be called only in this class method 
            echo "<br>";

            echo "Car class and car_drive method. This car is good.";
        }
    }

    class Truck extends Car { // inheritance from main class Car()
        //public $wheel = 12; // overwrite $wheel value from extends class
        // ----------private and protected property can not be overwrite--------//
        //private $door = 4;
        //protected $sofa = 4;

        function car_activity(){
           
            echo $this -> wheel=12; // public property can be called at anywhere
            echo "<br>";

            echo $this -> door=2; // private property can be called and overwrite in inheritance class 
            echo "<br>";

            echo $this -> sofa=5; // protected property can be called and overwrite in inheritance class
            echo "<br>";

            echo "Truck class and extends from Car class and car_activity method.This car is good.";
        }
    }

    $bmw = new Car(); // create instance object from class Car()

    echo $bmw -> wheel;
    echo "<br>";
    //echo $bmw -> door;// error // because private property can not be called
    echo "<br>";
    //echo $bmw -> sofa;// error // because protected property can not be called
    echo "<br>";
    $bmw -> car_drive();
    echo "<br>";

    $container = new Truck();
    $container -> car_activity();
    //echo $container -> door; // because private property can not be called from outside
    //echo $container -> sofa; // because protected property can not be called from outside
?>