 <!-- <?php 
    // $num = 20;
    // $num++;
    // echo $num;

    //$string = "50";
    //var_dump($string); // variable type
    //echo gettype($string);

?>-->


<!-- Embedded HTML code -->
<!-- <?php
    if (2>1) :
?>
    <h1>Hello World</h1>
<?php
    endif;
?> -->



<!-- Dynamic Variable -->
<!--<?php
    // $dyn = "x";
    // $x = 10;
    // $y = 20;

    //echo "${$dyn}";
    //echo "$$dyn";


    // $dyn = "x";
    // $x = "";
    // $y = 20;

    // if(isset($$dyn) && empty($$dyn)){
    //     echo "This is dynamic variable and it has empty string";
    // }
    // else{
    //     echo "This is not dynamic variable";
    // }


    // Ternary Operator 
   // $input = 10;
    //$result = $input = 0 ? "input is zero" : "input is $input";
    // concat
    //$result = $input = 0 ? "input is zero" . "input 0" : "input is something num" . " input is $input";
    //echo $result;
?> -->


<!-- nested loop -->
<?php
    // $start = 2;
    // $end = 5;
    // $i = $start;

    // ----------while loop
    // while($i <= $end){
    //     $j = 1;
    //     while($j <= 10){
    //         echo "{$i} * ${j} = " . $i * $j . "<br>";
    //         $j++;
    //     }
    //     $i++;
    // }

    // or
    //------------for loop
    // $start = 2;
    // $end = 5;
    // for($start;$start <= $end;$start++){
    //     for($i = 1;$i <= 10;$i++){
    //         echo "$start * $i = " . $start * $i . "<br>";
    //     }
    // }


    //-------------------
    // $start = 2;
    // for($start,$i = 1;$i <= 10;$i++){
    //     echo "$start * $i = " . $start * $i . "<br>";
    // }


    //-------Array
    // $arr = array(2,3,8,6,4,1,9);
    // or

    // $arr = [1,3,4,9,6,5,7];
    // or

    // $arr1 = array();
    // $arr1["username"] = "record1";
    // $arr1["password"] = "record2";
    // $arr1["gender"] = "record3";
    // print_r($arr1);

    // $total = 0;
    //print_r($arr); // horizontal output
    // or
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";

    // for($i = 0;$i <= count($arr)-1;$i++){
    //     //echo $arr[$i] . "<br>";
    //     // total
    //     $total += $arr[$i];
    // }
    // echo $total;
?>

<!-- Associated Array -->
<?php
    // $user = array(
    //     "username" => "mgmg",
    //     "password" => "123",
    //     "age" => 22,
    //     "city" => "Yangon",
    //     "gender" => "Male"
    // );

    // echo "<pre>";
    // print_r($user);
    // echo "</pre>";

    // foreach($user as $key => $value){
    //     echo "$key = ";
    //     echo $value . "<br>";
    // }

    
    //--------function
    // function testing($x){
    //     if($x > 0){
    //         return "Positive";
    //     }else if($x < 0){
    //         return "Negative";
    //     }
    //     else{
    //         return "Zero";
    //     }
    // }
    // echo testing(-5);


    //-------built-in-function
    // function hello($num = 5){
    //     return $num;
    // }

    // $result = hello();
    // echo $result;

    //--------Global in function
    // $global = "Global";
    // function x(){
    //     global $global;
    //     echo $global;
    // }
    // x();

    echo phpversion() . "<br>";
    echo PHP_INT_MAX;
    echo "<br>";
    echo PHP_INT_MIN;
    echo "<br>";
    echo __DIR__ . "<br>";
?>

<!-- or sign ||
backlash \ \ \ \-->