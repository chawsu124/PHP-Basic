<!-- Constant variable in class -->

<!-- const variable are 
                    no need to start with $ 
                    and must all const variable name are capital letters -->
<?php
    class Clock {
        const DAY_IN_SECOND = 60 *60 * 24; // constant variable
        
        public function tomorrow(){ // simple method
            return time() + self :: DAY_IN_SECOND;
        }
    }

    echo Clock :: DAY_IN_SECOND; // no need to create instance object because calling constant variable

    echo "<br>";

    $clock1 = new Clock(); // need to create instance object because calling simple method
    echo $clock1 -> tomorrow();

    echo "<hr>";
?>


<!-- Constructor -->
<!-- Constructor is auto working , while you call this class without calling this constructorName-->
<?php
    class Main {
        // constructor is __constructorName
        public function __construct(){ // create constructor
            echo "Hello This is constructor in class.";
        }
    }

    new Main(); // class Invoke // create instance object

?>

<!-- Constructor -->
<?php
    class Con {
        var $t = 0;
        public function __construct(){
            echo "I am constructor , start afternoon. <br>";
        }

        public function loopIt(){
            for($i=0;$i<10;$i++){
                $this -> t += $i;
            }
            echo "Total loop value is " . $this -> t . "<br>";
        }

        public function __destruct() {
            echo "I am destructor and class work is done . total value is " . $this -> t;
        }
    }

    $oob = new Con(); // __construct() this constructor is start working while instance obj start create
    $oob -> loopIt(); // work loopIt() fun: and then, do __destruct() constructor
?>