<!-- Strategy Pattern 2,3 and 4, 5 -->
<?php
    require_once "Notify.php";
    require_once "Email.php";
    require_once "Phone.php";
    require_once "SMS.php";
    //-------Strategy Pattern 4
    require_once "Notifier.php";

    //-------Strategy Pattern 5
    require_once "EmailUser.php";
    require_once "PhoneUser.php";
    require_once "SMSUser.php";

    class User{

        // -------------------Strategy Pattern 2, 3----------------------    
        //public function __construct($type){

            //$obj = null;

            // check this type 
        //     switch($type){
        //         case "Email": $obj = new EmailNotify();
        //         break;
        //         case "Phone": $obj = new PhoneNotify();
        //         break;
        //         case "SMS": $obj = new SMSNotify();
        //         break;
        //         default: echo "Only Notification by Email, Phone, SMS are accepted . ";
        //     }

        //     $obj-> send(); // call send() fun:
        //}


        // ------------------Strategy Pattern 4-------------
        // public function __construct(){

        //     $notifier = new Notifier();
        //     $notifier-> changeNotiType(new EmailNotify()); // call dynamic obj type as you like
        //     $notifier-> sendNow();
        //     $notifier-> changeNotiType(new PhoneNotify()); // call dynamic obj type as you like
        //     $notifier-> sendNow();
        // }


        // ------------------Strategy Pattern 5-------------
        public function __construct(){

            $email = new EmailUser();
            $email-> sendNow();

            echo "<br>";

            $phone = new PhoneUser();
            $phone-> sendNow();

            echo "<br>";
            echo "--------Dynamic Interchangeable Class in Strategy Pattern--------";
            echo "<br>";

            //-----------Highlight Point---------
            // Dynamic Interchangeable to class
            $email-> changeNotiType(new SMSNotify());// dynamic change class from email instance obj
            $email-> sendNow();

            echo "<br>";

            // Dynamic Interchangeable to class
            $phone-> changeNotiType(new EmailNotify());// dynamic change class from phone instance obj
            $phone-> sendNow();
        }

    }

    // --------Strategy Pattern 2,3
    // new User("Email");
    // echo "<br>";
    // new User("Phone");
    // echo "<br>";
    // new User("SMS");
    

    // -------Strategy Pattern 4
    new User();
?>