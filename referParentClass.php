<!-- Refer to Parent Class -->


<!-- first example -->
<?php
    class Chief {
        public static function make_dinner() { // static method
            echo "Cook Food";
        }
    }

    class Hotel extends Chief {
        public static function make_dinner() { // static method
            echo "Read Menu" . "<br>";

            // Hilight Point
            parent :: make_dinner(); // refer to make_dinner() method of parent class 
            
            echo "<br>";
            echo "Clean Table" . "<br>";
        }
    }

    echo "Chief class : " . "<br>"; 
    Chief :: make_dinner(); // no need to create instance object becauser calling static method

    echo "<hr>";

    echo "Hotel class : " . "<br>"; 
    Hotel :: make_dinner(); // no need to create instance object becauser calling static method

    echo "<hr>";
?>


<!-- second example -->
<?php
    class Image {
        public static $resizing_enable = true;

        public static function geometry() {
            echo "800";
        }
    }

    class ProfileImage extends Image {
        public static function geometry() {
            if(self :: $resizing_enable){ // if $resizing_enable is true
                echo "100";
            }else{
                parent :: geometry(); // if $resizing_enable is false
            }
        }
    }

    echo Image :: geometry();

    echo "<br>";

    echo ProfileImage :: geometry();

    echo "<hr>";
?>