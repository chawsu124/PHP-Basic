<!-- Simple Autoload 
    It can be no need to declare require_one("filename.php");
    So, It can be auto declare due to classname
-->
<?php
    // accept require_once from "loader.php" file
    require_once("loader.php"); // firstly, you must declare main loader file.php

    class Auto{
        public function __construct(){
            // it can be use ClassName:: fun() because it is static fun()
            Loader:: load("Helper"); // call static load fun()
            $helper = new Helper("helperName");
            $helper -> sayName();

            Loader:: load("Hello");
            $hello = new Hello();
            $hello -> sayHello();
        }
    }

    $au = new Auto(); // create instance obj from Auto class
?>