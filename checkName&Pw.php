<?php

    // if you send form with 'post' or 'get' method, you can catch with $_REQUEST('submit')

    if(isset($_POST['submit'])){ // or// if(isset($_REQUEST('submit')))
        $userAdmin = ['greenhackers','mgmgko','susuhlaing'];

        $username = $_POST['username'];
        $password = $_POST['password'];

        $minWord = 5;

        if(strlen($username) > $minWord){
            if(in_array($username,$userAdmin)){
                echo "Welcome to my site.";
            }else{
                echo "Try Again";
            }

        }else{
            echo "Please Enter Username more than 5 words.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checking Username</title>
</head>
<body>
    <form action="checkName&Pw.php" method = "post">
        <input type="text" name = "username" placeholder = "Enter your name"><br>
        <input type="password" name = "password" placeholder = "Enter your password"><br>
        <input type="submit" name = "submit" value = "Submit">
    </form>
</body>
</html>