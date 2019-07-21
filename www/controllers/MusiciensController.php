<?php
declare(strict_types = 1);

namespace controllers;

class MusiciensController
{
    public function defaultAction(){
//        $tabFinale = [];
        $tablMusiciens = array(
            "1" => "Etienne",
            "2" => "Faicel",
            "3" => "Aissatou",
            "4" => "Arthur",
            "5" => "Sebastien",
            "6" => "Quant-deux",
            "7" => "Lory",
            "8" => "Alex",
        );
        $tablGroupes = array(
            "1" => "Led Zeppelin",
            "2" => "Green Day",
            "3" => "Lynyrd Skynyrd",
            "4" => "Arcade Fire",
            "5" => "Phoenix",
            "6" => "Radiohead",
            "7" => "Pantera",
        );
        $tablInstruments = array(
            "1" => "Saxophone",
            "2" => "Basse",
            "3" => "Guitare",
            "4" => "Batterie",
            "5" => "piano",
            "6" => "saxophone",
            "7" => "Violon",
        );
        for($x=0; $x <= 3; $x++) {
            $randMusicien = rand(1, 8);
            $randGroupe = rand(1,7);
            $randInstument = rand(1,7);
            $tabFinale[] = array("Musiciens" => $tablMusiciens[$randMusicien],
                                 "Groupes" => $tablGroupes[$randGroupe],
                                "Instruments" => $tablInstruments[$randInstument]);
        }
        require ('views/musiciens.php');

    }
}