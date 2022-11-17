<!-- Factory Design Pattern -->
<?php
    class Marcedee{
        public function __construct(){
            echo "We have created " . __CLASS__ . " car .<br>";
        }

        public function driveRange(){
            echo "This car drive 100 miles per hour <br>";
        }
    }

    class Toyota{
        public function __construct(){
            echo "We have created " . __CLASS__ . " car .<br>";
        }

        public function driveRange(){
            echo "This car drive 120 miles per hour <br>";
        }
    }

    // ------------do all works(checkType & call class) in this CarFactory class itself
    class CarFactory{
        // static Modifier
        public static function make($type){
            if(empty($type)){
                throw new Exception("Must supply car type <br>");
            }else{
                $classname = ucfirst($type);// change uppercase of first character to $type 
                if(class_exists($classname)){
                    return new $classname();// Invoke this class
                }else{
                    throw new Exception("We can't built {$type} car <br>");
                }
            }
        }
    }

    // create instance obj from Factory class
    try{
        $car = CarFactory:: make("toyota");
        $car-> driveRange();
    }catch(Exception $e){
        echo $e-> getMessage();
    }
?>