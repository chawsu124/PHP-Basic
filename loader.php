<!-- It is loader.php file to go Autoloading.php -->
<?php
    class Loader{
        // you must be create static function
        public static function load($className){ // static load fun()
            require_once $className . ".php";
        }
    }
?>