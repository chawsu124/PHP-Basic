<?php
    require_once "Player.php";

    class Music{

        public function __construct(){

            $player = new Player();
            $player-> setMusicPath("C:/admin/documents/music/");
            $player-> setMusic("Aeimat.mp3");

            $this-> play($player-> getMusicPath(),$player-> getMusic());
        }

        public function play($path,$music){
            echo "Playing " . $path . " from " . $music;
        }
    }

    new Music();
?>