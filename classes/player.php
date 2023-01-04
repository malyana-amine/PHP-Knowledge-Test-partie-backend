<?php
require_once "DBc.php";

class player {
    private $idPLayer;
    private $score;
    private $IP;
    private $OS;
    private $browser;
    private $datePlayer;
    public function __construct($idPLayer,$score,$IP,$OS,$browser,$datePlayer){

    

    $this->idPLayer = $idPLayer;
    $this->score = $score;
    $this->IP = $IP;
    $this->OS = $OS;
    $this->browser = $browser;
    $this->datePlayer = $datePlayer;
    }





    public function getidplayer()
    {
        return $this->idPLayer;
    }

    public function setidplayer($idPLayer): void
    {
        $this->idPLayer = $idPLayer;
    }



    public function getscore()
    {
        return $this->score;
    }

    public function setscore($score): void
    {
        $this->score = $score;
    }



    public function getIP()
    {
        return $this->IP;
    }

    public function setIP($IP): void
    {
        $this->IP = $IP;
    }


    public function getOS()
    {
        return $this->OS;
    }

    public function setOS($OS): void
    {
        $this->OS = $OS;
    }


    public function getbrowser()
    {
        return $this->browser;
    }

    public function setbrowser($browser): void
    {
        $this->browser = $browser;
    }



    public function getdatePlayer()
    {
        return $this->datePlayer;
    }

    public function setdatePlayer($datePlayer): void
    {
        $this->datePlayer = $datePlayer;
    }


    static public function insertPlayerData($idPLayer,$score,$IP,$OS,$browser,$datePlayer){


        $conn1=DbConnection::connect();
        $PlayerData = $conn1->prepare("INSERT INTO `player`(`idPLayer`, `score`, `IP`, `OS`, `browser`, `datePlayer`) VALUES ('$idPLayer','$score','$IP','$OS','$browser','$datePlayer')");
        $PlayerData->execute();

    }



    }