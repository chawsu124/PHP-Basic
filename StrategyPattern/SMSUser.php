<!-- Strategy Pattern 5 -->
<?php

    class SMSUser extends Notifier{// this class extends from abstract Notifier class
        // So, SMSUser class owns all properties and methods in this abstract class

        public function __construct(){
            $this-> notification = new SMSNotify(); // Put SMSNotify() object to this $notification value in abstract class 
        }
    }
?>