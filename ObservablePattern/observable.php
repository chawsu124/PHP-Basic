<!-- -----------Observable Pattern-------------- -->
<?php
    // abstract class
    abstract class SubscriberObj{
        // create abstract function
        abstract function update($newTutorial, $observer);// watch every update posts from Publisher
    }

    // abstract class
    abstract class PublisherObj{
        // create abstract functions
        abstract function attach(SubscriberObj $observer);// like/subscribe this channel
        abstract function detach(SubscriberObj $observer);// unlike/desubscribe this channel
        abstract function notify();// notify all subscribers every new publish posts
    }

    class TutorialPublisher extends PublisherObj{
        private $newTutorial = "";
        private $observers = [];

        // Register every subscriber
        public function attach(SubscriberObj $observer){
            array_push($this-> observers, $observer);
        }

        // Delete from registration list to this subscriber
        public function detach(SubscriberObj $observer){
            foreach($this-> observers as $key=> $obs){//foreach loop in every index in $observers array
                if($obs == $observer){
                    unset($this-> observers[$key]);// delete this subscriber
                }
            }
        }

        public function notify(){
            foreach($this-> observers as $observer){
                $observer-> update($this-> newTutorial, $observer);
            }
        }

        // add new function
        public function addTutorial($newTuto){
            $this-> newTutorial = $newTuto;
            $this-> notify();
        }
    }

    class StudentScriber extends SubscriberObj{

        public function update($newTutorial, $observer){
            echo "{$newTutorial} is published by {$observer-> name} <br>";
        }
    }

    // Create instance obj from StudentScriber class
    $stu1 = new StudentScriber();
    $stu1-> name = "Mg Mg";
    $stu2 = new StudentScriber();
    $stu2-> name = "Aung Aung";
    $stu3 = new StudentScriber();
    $stu3-> name = "Ko Ko";

    // Create instance obj from TutorialPublisher class
    $tutoChannel = new TutorialPublisher();
    $tutoChannel-> attach($stu1);
    $tutoChannel-> attach($stu2);
    $tutoChannel-> attach($stu3);

    // add new tutorial subject
    $tutoChannel-> addTutorial("Python Programming ");

    echo "<hr>";

    // describe/unlike this channel from $stu3
    $tutoChannel-> detach($stu3);

    // add new tutorial subject
    $tutoChannel-> addTutorial("PHP Programming ");


?>