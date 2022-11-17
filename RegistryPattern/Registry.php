<?php
    require_once "Helper.php";

    class Registry{
        // Create static property and static fun()
        private static $data = [];

        // use self:: $name because it use static modifier
        public static function setData($key, $val){
            if(array_key_exists($key, self:: $data)){
                echo "This key is already in use <br>";
            }else{
                self:: $data[$key] = $val;
            }
        }

        public static function getData($key){
            return isset(self:: $data[$key]) ? self:: $data[$key] : null;
        }

        public static function removeData($key){
            if(array_key_exists($key,self:: $data)){
                unset(self:: $data[$key]);
            }else{
                echo "Value with that key " . $key . " is not exist <br>";
            }
        }
    }

    // call this static class Registry
    Registry:: setData("2011","Acer");
    Registry:: setData("2012","Dell");
    Registry:: setData("2013","Lenovo");
    Registry:: setData("2014","Mac");

    // create instance obj from Helper class
    $helper = new Helper();

    Registry:: setData("helper", $helper);// key is "helper" and value is $helper object

    echo Registry:: getData("2011");
    echo "<br>";
    echo Registry:: getData("2013");
    echo "<br>";

    // output of key "helper" 
    Registry:: getData("helper")-> doJob("Driving a car");// call doJob() of this Helper class
?>