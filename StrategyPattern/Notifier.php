<?php
    //-----------Strategy 4
    //class Notifier{
    
    // ----------Strategy 5 // Change abstract to this Notifier class
    abstract class Notifier{

        protected $notification;

        public function sendNow(){
            $this-> notification-> send(); // call send() fun: of each type(Email,Phone,SMS)
        }

        // because this all class(Email,Phone,SMS) is implements from Notify interface
        // So, Notify is main class 
        // this three classes are sub class of Notify class
        public function changeNotiType(Notify $noti){// (argument must be Notify obj type )
            $this-> notification = $noti;
        }
    }
?>