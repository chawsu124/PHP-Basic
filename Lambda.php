<!-- Lambda Expression
    with use of anonymous fun()-->
<?php
    function doIt($par1,$par2,$par3){

        $total = $par1 + $par2;
        $par3($total);
    }

    doIt(3,2,function($val){
        echo "I am Lambda function with value of  {$val}";
    })
?>