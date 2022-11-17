<!-- Static Modifier -->

<!-- In Static Modifier
                        :: instead of ->
                        self instead of $this -->
<?php
    class Mod{

        private static $count = 0;

        public function getCount(){
            self:: $count++;
            echo self:: $count . "<br>";
        }

    }
    
    $aa = new Mod();
    $aa -> getCount();
    $aa -> getCount();

    $bb = new Mod();
    $bb -> getCount();
    $bb -> getCount();

    echo "<hr>";
?>

<!-- non static method can called to static method
    But , static method can not called to non static method 
    But, if all methods are static , it is ok.
-->
<?php
    class Inde{
        public static $count = 0;

        public function showMe(){ // non static ()
            echo self:: doIt(); // call to static () from non static ()
        }

        public static function doIt(){ // static ()
            echo "Hello World <br>";
        }
    }

    $ind = new Inde();
    $ind -> showMe(); // call to non static ()

    echo Inde:: $count; // call to static variable

    echo "<hr>";
?>

<?php
    class Students {

        // static variable
        public static $grade = ['First Year','Second Year','Third Year']; // static variable// public variable

        private static $total_students = 0; // static variable// private variable

        static function motto() { // static method
            echo "To learn PHP oop";
        }

        public static function studens_count() {// static method
            return self:: $total_students; //:: instead of //self instead of $this
        }

        public static function add_student() {// static method
            self:: $total_students ++;
        }
    }

    // no need to create instance object from class because static variable
    echo Students :: $grade[0];// no need to create instance object because calling static variable
    echo "<br>";
    echo Students :: motto();// no need to create instance object because calling static method
    echo "<br>";
    //echo Students :: $total_students;
    echo "<br>";
    echo Students :: studens_count();// no need to create instance object because calling static method
    echo "<hr>";

    // add 1 student per add_student() call
    Students :: add_student();// no need to create instance object because calling static method
    Students :: add_student();
    Students :: add_student();
    Students :: add_student();
    Students :: add_student();

    echo Students :: studens_count();
    echo "<hr>";
?>