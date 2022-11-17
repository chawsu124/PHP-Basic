<!-- class SingleTon -->
<?php
    class Indexy {

        // all are private
        private static $name = "Cracky Shine";
        private static $instance;

        private function __construct(){
            self:: $name = "Waifer Kolar";
        }

        // public static fun()
        public static function getInstance(){
            if(self:: $instance == null){
                self:: $instance = new Indexy(); // Invoke class and create new instance obj
            }
            return self:: $instance; // and then, return this instance obj
        }

        // public fun()
        public function getName(){
            return self:: $name;
        }
    }

    $ind = Indexy:: getInstance(); // call static fun() and it return instance obj
    echo $ind -> getName(); // call public fun() from instane obj
?>