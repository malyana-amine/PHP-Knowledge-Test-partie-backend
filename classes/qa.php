<?php
require_once "DBc.php";

class qa{
    private $id;
    private $question;
    private $choix1;
    private $choix2;
    private $choix3;
    private $choix4;
    private $correctAnswer;

    public function __construct($question, $choix1,$choix2,$choix3,$choix4, $correctAnswer)
    {
        $this->question = $question;
        $this->choix1 = $choix1;
        $this->choix2 = $choix2;
        $this->choix3 = $choix3;
        $this->choix4 = $choix4;
        $this->correctAnswer = $correctAnswer;
    }

    public function getquestion()
    {
        return $this->question;
    }
    public function setquestion($question): void
    {
        $this->question = $question;
    }


    public function getchoix1()
    {
        return $this->choix1;
    }
    public function setchoix1($choix1): void
    {
        $this->choix1 = $choix1;
    }



    public function getchoix2()
    {
        return $this->choix2;
    }
    public function setchoix2($choix2): void
    {
        $this->choix2 = $choix2;
    }




    public function getchoix3()
    {
        return $this->choix3;
    }
    public function setchoix3($choix3): void
    {
        $this->choix3 = $choix3;
    }




    public function getchoix4()
    {
        return $this->choix4;
    }
    public function setchoix4($choix4): void
    {
        $this->choix4 = $choix4;
    }



    public function getcorrectAnswer()
    {
        return $this->correctAnswer;
    }
    public function setcorrectAnswer($correctAnswer): void
    {
        $this->correctAnswer = $correctAnswer;
    }

    public static function selectQuestions()
    {
        $conn1=DbConnection::connect();
        $qa = $conn1->prepare('SELECT * FROM qa');
        $qa->execute();
        return $qa->fetchAll(PDO::FETCH_ASSOC);
    }

}