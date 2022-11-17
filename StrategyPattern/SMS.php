<!-- Strategy Pattern 2,3 and use in 4, 5 -->
<?php

    class SMSNotify implements Notify{

        public function send(){
            echo "Notification send by SMS ";
        }
    }
?>