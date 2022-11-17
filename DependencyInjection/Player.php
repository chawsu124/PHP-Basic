<?php
    class Player{

        private $path;
        private $music;

        // public function __construct($path,$music){
        //     $this-> path = $path;
        //     $this-> music = $music;
        // }

        // public function playNow(){
        //     echo "Playing " . $this-> music . " from " . $this-> path;
        // }


        // use setter Injection
        public function setMusicPath($path){
            $this-> path = $path;
        }

        public function setMusic($music){
            $this-> music = $music;
        }

        // and use getter Injection
        public function getMusicPath(){
            return $this-> path;
        }

        public function getMusic(){
            return $this-> music;
        }
    }
?>