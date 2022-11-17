<!-- Abstract Methods and Class -->

<?php
    abstract class Paar{

        const DB_HOST = "localhost";
        public $name = "MGMG";

        // abstract method must never have body {}
        public abstract function myAbs(); 
        // if you use abstract method(), your class must be abstract class
        // and then, you must be overwrite this abstract method() in inherience class 

        public function doIt(){
            echo "I am doing it now <br>";
        }
    }

    // create inherience class 
    class Son extends Paar {

        // overwrite abstract method() in inherience class
        public function myAbs(){
            echo "I am abstract overwrite method originally <br>";
        }
    }

    // create instance obj from inherience class
    $ind = new Son();
    $ind -> myAbs();
    $ind -> doIt();
    echo "<hr>";
?>