<!-- Strategy Pattern 5 -->
<?php

    class PhoneUser extends Notifier{// this class extends from abstract Notifier class
        // So, PhoneUser class owns all properties and methods in this abstract class

        public function __construct(){
            $this-> notification = new PhoneNotify(); // Put PhoneNotify() object to this $notification value in abstract class 
        }
    }
?>