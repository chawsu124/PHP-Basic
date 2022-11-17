<!-- CallBack function

-->
<?php
    class Call{

        public function doIt($fName){
            // do something
            $i = 0;
            $sum = 0;
            while($i < 100){
                $sum += $i;
                $i++;
            }

            // call Callback fun() with $sum value  after doing all work
            $this -> $fName($sum);
        }

        public function finish($total){
            echo "Finish all work . All total is " . $total . "<br>";
        }

        public function donkey($val){
            echo "I am donkey function with total value of " . $val . "<br>";
        }
    }

    $ind = new Call();
    $ind -> doIt("finish"); // call doIt(Callback fun: name) function with callback function argument is finish()
    $ind -> doIt("donkey"); // call doIt(Callback fun: name) function with callback function argument is donkey()
?>