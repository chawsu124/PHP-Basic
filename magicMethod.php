<!-- Magic Method 1 
        __get() and __set()
-->
<?php
    class Magic {

        public function __get($var){
            echo "You are trying to get non exist property ($var) <br>";
        }

        public function __set($var,$value){
            echo "You are trying to set non exist property ($var) with value of ($value) <br>";
        }
    }

    $eg = new Magic();
    $eg -> name = "Mg Mg";
    echo "<hr>";
?>

<!-- Magic Method 2 
        __isset() and __unset()
-->
<?php
    class Index{

        public function __isset($var){
            echo "You are trying check isset or not having variable <span style='color:red'>" . $var . "</span><br>";
        }

        public function __unset($var){
            echo "You are trying check unset or not having variable <span style='color:red'>" . $var . "</span><br>";
        }
    }

    $eg = new Index();
    isset($eg -> age);
    unset($eg -> name);

    echo "<hr>";
?>

<!-- Magic Method 3 
        __call() and __callStatic()
-->
<?php
    class Magic3{

        public function __call($method,$value){
            echo "You are trying to call non exist method ($method) with values of <br>";
            echo "<pre>" . print_r($value) . "</pre>";
        }

        // static function()
        public static function __callStatic($name,$arguments){
            echo "You are trying to call non exist static method ($name) with parameters of <br>";
            echo "<pre>" . print_r($arguments,true) . "</pre>";
        }
    }

    $ma3 = new Magic3();
    $ma3 -> hello("Mg Mg","Aung Aung"); // call non exist method

    Magic3:: hey("Ma Ma","Su Su"); // call static method 

    echo "<hr>";
?>

<!-- Magic Method 4
        __sleep() and __wakeup()
-->
<?php
    class Magic4{

        public function __sleep(){
            echo "You are trying to sleep or serialize my object <br>";
            return [];
        }

        public function __wakeup(){
            echo "You are trying to wakeup or deserialize my object <br>";
           
        }
    }

    $ma4 = new Magic4();

    $seri = serialize($ma4); // to sleep instance obj
    echo $seri;
    echo "<br>";

    $unseri = unserialize($seri); // to wakeup instance obj
    echo $unseri;
    echo "<hr>";
?>

<!-- Magic Method 6
        __toString() and __invoke() and __clone()
-->
<?php
    class Magic6{
        public $name = "SU SU";

        public function __toString(){
            return "This class have no properties and no methods <br>";
        }

        public function __invoke(){
            echo "You are trying to call Object as method <br>";
        }

        public function __clone(){
            echo "You are cloning to me <br>";
           
        }
    }

    $ma6 = new Magic6();

    echo $ma6; // call instance obj from class
    echo $ma6(); // trying to call instance obj as method()
    
    $aa = clone $ma6; // clone or copy $ma6 obj to $aa
    echo "<hr>";
?>