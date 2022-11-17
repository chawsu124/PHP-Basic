<!-- Inheritance and Static Behavior -->

<?php
    class Students {
        public static $grade = ['First Year','Second Year','Third Year']; // public variable

        private static $total_student = 0; // private variable

        public static function count() {
            return self:: $total_student; //:: instead of //self instead of $this
        }

        public static function add_student() {
            self:: $total_student ++;
        }
    }

    class PartTimeStudent extends Students {

    }

    echo PartTimeStudent :: $grade[0] . "<br>";

    Students :: $grade[] = 'OJT'; // add last index of $grade array
    PartTimeStudent :: $grade[] = 'Juniior Developer'; // add last index of $grade array
    // add value to $grade array in inheritance class so, add value to main class 
    //------beacuse static is shared variable-------//
    // so, if something change in inheritance class -> too change in main class 

    echo implode('/',PartTimeStudent :: $grade) . "<br>";

    echo implode('&',Students :: $grade) . "<br>";

    echo "<hr>";

    Students :: add_student();
    Students :: add_student();
    Students :: add_student();

    PartTimeStudent :: add_student();

    //echo Students :: $total_student . "<br>";

    //echo PartTimeStudent :: $total_student . "<br>";
    //echo "<hr>";

    echo Students :: count() . "<br>";
    echo PartTimeStudent :: count() . "<br>";
    echo "<hr>";
?>