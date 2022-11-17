<!-- Strategy Pattern 5 -->
<?php

    class EmailUser extends Notifier{// this class extends from abstract Notifier class
        // So, EmailUser class owns all properties and methods in this abstract class

        public function __construct(){
            $this-> notification = new EmailNotify(); // Put EmailNotify() object to this $notification value in abstract class 
        }
    }
?>