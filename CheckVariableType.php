<!-- 
    Checking Variable Type 
    is_int($variableName) check number type 
    is_string($variableName) check string type
    is_null($variableName) check null type
    is_bool($variableName) check boolean type
    is_float($variableName) check float type
-->
<?php
    class Check{

        public function showResult($num){
            if(is_float($num)){ // test with is_int() / is_string() / is_null() / is_bool() / is_float()
                echo "Right ! It is correct number type . <br>";
            }else{
                echo "No, it is wrong type <br>";
            }
        }
    }

    $ch = new Check();
    $ch -> showResult(12.2);
    echo "<hr>";
?>

<!-- Scalar Type Hints -->
<?php
    class Hint{

        public function showInt(int $num){ // checking type and it must be integer type
            var_dump($num); // var_dump($name) is output both its type and value
        }

        public function showString(string $str){ // checking type and it must be string type
            var_dump($str); 
        }

        public function showBool(bool $bool){ // checking type and it must be boolean type
            var_dump($bool); 
        }

        public function showFloat(float $flo){ // checking type and it must be float type
            var_dump($flo); 
        }

        // accept only array type
        public function showArray(array $arr){ // checking type and it must be array type
            var_dump($arr); 
        }
    }

    $hq = new Hint();
    $hq -> showInt(20);
    $hq -> showString("One");
    $hq -> showBool(true);
    $hq -> showFloat(20.3);

    $hq -> showArray(["one","two"]);
    // or
    $hq -> showArray(["one"=>1,"two"=>2]);
    echo "<hr>";
?>

<!-- Object Type Hints -->
<?php
    class Test{

    }
    class Best{

    }

    class Result{
        public function testType(Test $obj){ // accept only Test object type
            var_dump($obj);
        }
        public function bestType(Best $obj){ // accept only Best object type
            var_dump($obj);
        }
    }

    $tt = new Test();
    $bb = new Best();

    $re = new Result();
    $re -> testType($tt);
    $re -> bestType($bb);

    echo "<hr>";
?>

<!-- Return Type -->
<?php
    class Ret{

        // you can set return type as : type ,as you like
        public function retype(int $num) : string { // : string is must return string type
           
            return $num;
        }
    }

    $vv = new Ret();
    $ans = $vv -> retype(12);
    var_dump($ans);
  
    echo "<hr>";
?>