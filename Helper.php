<!-- It is "Helper.php" file go to "Autoload.php" file -->
<?php
    class Helper{

        private $name;

        public function __construct($name){
            $this -> name = $name;
        }

        public function sayName(){
            echo "My name is " . $this -> name . "<br>";
        }
    }
?>