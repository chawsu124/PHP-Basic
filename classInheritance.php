<!-- Class Inheritance -->

<?php
    class Book {
        var $fileName;

        function download_path(){
            return "Download Link Here : " . $this -> fileName;
        }
    }

    // HistoryBook() class is inheritance from main class Book()
    class HistoryBook extends Book { // subclass
        function h_book(){
            echo "History Book class inheritance from main Book class. 
                So, properties and method of Book class can be use and overwrite it all.";
        }
    }

    // ProgrammingBook() class is inheritance from main class Book()
    class ProgrammingBook extends Book { // subclass 
        function p_book(){
            echo "Programming Book class inheritance from main Book class. 
                So, properties and method of Book class can be use and overwrite it all.";
        }
    }

    $firstBook = new HistoryBook();
    $firstBook -> fileName = "Myanmar History Book"; // overwrite fileName property 

    echo $firstBook -> download_path();
    echo "<br>";
    echo "<hr>";

    $secondBook = new ProgrammingBook();
    $secondBook -> fileName = "Complete Programming Myanmar Book"; // overwrite fileName property 

    echo $secondBook -> download_path();
    echo "<br>";
    echo "<hr>";
?>

<!-- Parent and Child Constructor Overwriting -->
<?php
    class Member {
        public function __construct(){
            echo "Pa Pa is still working . <br>";
        }
    }

    class Goldmember extends Member { // Inherience from Member
        public function __construct(){ // constructor overwriting
            parent::__construct();
            echo "Child is start working . <br>";
        }
    }

    $bo = new Goldmember();

    // If you want to see both parent constructor and child constructor,
    // put this word in inheritance(child) class constructor

    // parent::__construct(); //


    echo "<hr>";
?>

<!-- if you use extends multiple class, using trait -->
<?php
    trait User { // create new trait
        var $name = "Username";

        public function doIt(){
            echo "using User trait <br>";
        }
    }

    trait Hacker { // create new trait
        var $age = 30;

        public function hackIt(){
            echo "using Hacker trait <br>";
        }
    }

    class Diamond { // create new class using trait
        use User; // use trait User
        use Hacker; // use trait Hacker
    }

    $obj = new Diamond();

    echo $obj -> name;
    echo $obj -> age;
    echo "<br>";

    $obj -> doIt();
    $obj -> hackIt();

    echo "<hr>";
?>