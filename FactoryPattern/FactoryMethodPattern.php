<!-- Factory Method Pattern -->
<?php
    interface Car{

    }
    class Marcedee implements Car{
        public function getName(){
            echo __CLASS__;
        }
    }
    class Toyota implements Car{
        public function getName(){
            echo __CLASS__;
        }
    }

    // abstract class
    abstract class CarFactory{
        abstract function make($type);
    }

    // --------do only check $type in this CarMaker class 
    class CarMaker extends CarFactory{
        public function make($type){
            if($type == "Marcedee"){
                return new Marcedee();
            }else if($type == "Toyota"){
                return new Toyota();
            }
        }
    }

    // ---------this fun: do output car name
    // because Marcedee and Toyota class implements from Car interface
    function outCar(Car $car){// argument must be Car type(marcedee and toyota)
        $car-> getName();
    }

    // create instance obj
    $car = new CarMaker();
    $marcedee = $car-> make("Marcedee");// call make() fun: from this instance $car obj
    $toyota = $car-> make("Toyota");

    // 
    outCar($marcedee);
    echo "<br>";
    outCar($toyota);
?>