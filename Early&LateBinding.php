<!-- Early Binding and Late Binding
 -->
<?php
    class One{
        public function className(){
            return __CLASS__;
        }
        public function getClass(){

            // original class depend
            //echo self:: className(); // self:: is point to original class

            // current class depend
            //echo $this -> className(); // $this -> is point to current class
            // or
            echo static:: className(); // static:: is point to current class 
        }
    }

    class Two extends One{
        public function className(){
            return __CLASS__;
        }
    }

    $c1 = new One();
    $c1 -> getClass();

    echo "<br>";

    $c2 = new Two();
    $c2 -> getClass();

    echo "<hr>";
?>

<?php
    class Three{
        public static $name = "WaiferKolar";

        public static function authorName(){
            return self:: $name;
        }

        public static function getAuthor(){
            //echo self:: authorName(); // self:: is point to original class

            echo static:: authorName(); // static:: is point to current class 
        }
    }

    class Four extends Three {
        public static function authorName(){
            return self:: $name . " and Cracky Shine ";
        }
    }

    Three:: getAuthor();
    echo "<br>";
    Four:: getAuthor();

    echo "<hr>";
?>